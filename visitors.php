<?php
require_once 'dbt.php';

// Inicjalizacja połączenia z bazą danych
try {
    $db = new PDO("mysql:host=$host;dbname=baza5950_brcmaestro", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    writeLog("Błąd połączenia z bazą danych: " . $e->getMessage());
    die("Błąd połączenia z bazą danych");
}

// Sprawdzenie i utworzenie tabeli visits
try {
    $db->exec("CREATE TABLE IF NOT EXISTS visits (
        id INT AUTO_INCREMENT PRIMARY KEY,
        ip VARCHAR(45) NOT NULL,
        page VARCHAR(255) NOT NULL,
        visit_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        INDEX idx_ip (ip),
        INDEX idx_visit_time (visit_time)
    )");
} catch(PDOException $e) {
    writeLog("Błąd podczas tworzenia/sprawdzania tabeli visits: " . $e->getMessage());
}

// Funkcja do logowania odwiedzin
function logVisit() {
    global $db;
    try {
        $ip = $_SERVER['REMOTE_ADDR'];
        $page = $_SERVER['REQUEST_URI'];
        
        // Sprawdź, czy w ciągu ostatniej minuty nie było już odwiedzin z tego IP
        $stmt = $db->prepare("
            SELECT COUNT(*) as count 
            FROM visits 
            WHERE ip = ? 
            AND page = ? 
            AND visit_time > DATE_SUB(NOW(), INTERVAL 1 MINUTE)
        ");
        $stmt->execute([$ip, $page]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($result['count'] == 0) {
            // Dodaj nową wizytę
            $stmt = $db->prepare("
                INSERT INTO visits (ip, page) 
                VALUES (?, ?)
            ");
            $stmt->execute([$ip, $page]);
        }
    } catch(PDOException $e) {
        writeLog("Błąd podczas logowania odwiedzin: " . $e->getMessage());
    }
}

// Funkcja do pobierania statystyk odwiedzin
function getVisitStats() {
    global $db;
    try {
        // Dzisiejsze odwiedziny
        $stmt = $db->query("SELECT COUNT(DISTINCT ip) as count FROM visits 
                           WHERE DATE(visit_time) = CURDATE()");
        $todayVisits = $stmt->fetch(PDO::FETCH_ASSOC)['count'];
        
        // Odwiedziny w tym miesiącu
        $stmt = $db->query("SELECT COUNT(DISTINCT ip) as count FROM visits 
                           WHERE MONTH(visit_time) = MONTH(CURDATE()) 
                           AND YEAR(visit_time) = YEAR(CURDATE())");
        $monthlyVisits = $stmt->fetch(PDO::FETCH_ASSOC)['count'];
        
        // Łączna liczba odwiedzin
        $stmt = $db->query("SELECT COUNT(DISTINCT ip) as count FROM visits");
        $totalVisits = $stmt->fetch(PDO::FETCH_ASSOC)['count'];
        
        return [
            'today' => $todayVisits,
            'monthly' => $monthlyVisits,
            'total' => $totalVisits
        ];
    } catch(PDOException $e) {
        writeLog("Błąd podczas pobierania statystyk: " . $e->getMessage());
        return [
            'today' => 0,
            'monthly' => 0,
            'total' => 0
        ];
    }
}

// Funkcja do pobierania aktywnych użytkowników
function getActiveUsers() {
    global $db;
    try {
        // Pobierz użytkowników aktywnych w ciągu ostatnich 5 minut
        $stmt = $db->query("SELECT 
                            ip,
                            page,
                            MAX(visit_time) as last_visit,
                            TIMESTAMPDIFF(SECOND, MAX(visit_time), NOW()) as time_spent
                           FROM visits 
                           WHERE visit_time >= DATE_SUB(NOW(), INTERVAL 5 MINUTE)
                           GROUP BY ip, page
                           ORDER BY last_visit DESC");
        
        $activeUsers = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Formatuj czas spędzony na stronie
        foreach ($activeUsers as &$user) {
            $minutes = floor($user['time_spent'] / 60);
            $seconds = $user['time_spent'] % 60;
            $user['time_spent'] = sprintf("%d min %d sek", $minutes, $seconds);
            
            // Formatuj nazwę strony
            $user['page'] = formatPageName($user['page']);
        }
        
        return $activeUsers;
    } catch(PDOException $e) {
        writeLog("Błąd podczas pobierania aktywnych użytkowników: " . $e->getMessage());
        return [];
    }
}

// Funkcja pomocnicza do formatowania nazw stron
function formatPageName($page) {
    $pageMap = [
        'index.php' => 'Strona główna',
        'galeria.php' => 'Galeria',
        'zaklady.php' => 'Zakłady',
        'lista.php' => 'Lista pojazdów',
        'o-nas.php' => 'O nas',
        'kontakt.php' => 'Kontakt',
        'admin.php' => 'Panel administracyjny'
    ];
    
    foreach ($pageMap as $key => $value) {
        if (strpos($page, $key) !== false) {
            return $value;
        }
    }
    
    return 'Inna strona';
}

// Funkcja do pobierania statystyk odwiedzin stron
function getPageStats() {
    global $db;
    try {
        // Pobierz statystyki odwiedzin dla każdej strony
        $stmt = $db->query("SELECT 
                            CASE 
                                WHEN page LIKE '%index.php%' THEN 'Strona główna'
                                WHEN page LIKE '%galeria.php%' THEN 'Galeria'
                                WHEN page LIKE '%zaklady.php%' THEN 'Zakłady'
                                WHEN page LIKE '%lista.php%' THEN 'Lista pojazdów'
                                WHEN page LIKE '%o-nas.php%' THEN 'O nas'
                                WHEN page LIKE '%kontakt.php%' THEN 'Kontakt'
                                ELSE 'Inne'
                            END as page_name,
                            COUNT(DISTINCT ip) as visit_count
                           FROM visits 
                           WHERE visit_time >= DATE_SUB(NOW(), INTERVAL 30 DAY)
                           GROUP BY page_name
                           ORDER BY visit_count DESC");
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        writeLog("Błąd podczas pobierania statystyk stron: " . $e->getMessage());
        return [];
    }
}

function getRecentVisits() {
    global $db;
    try {
        $stmt = $db->query("
            SELECT ip, page, visit_time, 
                   TIMESTAMPDIFF(SECOND, visit_time, NOW()) as time_spent
            FROM visits 
            ORDER BY visit_time DESC 
            LIMIT 5
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        writeLog("Błąd podczas pobierania ostatnich odwiedzin: " . $e->getMessage());
        return [];
    }
}

function formatTimeSpent($seconds) {
    if ($seconds < 60) {
        return $seconds . ' sekund';
    } elseif ($seconds < 3600) {
        $minutes = floor($seconds / 60);
        return $minutes . ' minut';
    } else {
        $hours = floor($seconds / 3600);
        $minutes = floor(($seconds % 3600) / 60);
        return $hours . ' godzin ' . $minutes . ' minut';
    }
}

// Wywołaj funkcję logowania odwiedzin
logVisit();

// Pobierz statystyki i aktywnych użytkowników
$stats = getVisitStats();
$activeUsers = getActiveUsers();

// Pobierz statystyki stron
$pageStats = getPageStats();

// Przypisz zmienne do użycia w szablonie
$todayVisits = $stats['today'];
$monthlyVisits = $stats['monthly'];
$totalVisits = $stats['total'];

// Przygotuj dane do wykresu
$pageNames = [];
$visitCounts = [];
$colors = [
    'rgba(255, 99, 132, 0.7)',
    'rgba(54, 162, 235, 0.7)',
    'rgba(255, 206, 86, 0.7)',
    'rgba(75, 192, 192, 0.7)',
    'rgba(153, 102, 255, 0.7)',
    'rgba(255, 159, 64, 0.7)'
];

foreach ($pageStats as $stat) {
    $pageNames[] = $stat['page_name'];
    $visitCounts[] = $stat['visit_count'];
}
?> 