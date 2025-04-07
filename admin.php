<?php
session_start();
require_once 'dbt.php';
require_once 'visitors.php';

// Funkcja do logowania
function writeLog($message) {
    $logFile = 'logi.txt';
    $timestamp = date('Y-m-d H:i:s');
    $logMessage = "[$timestamp] $message\n";
    file_put_contents($logFile, $logMessage, FILE_APPEND);
}

// Sprawdzenie czy użytkownik jest zalogowany
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // Obsługa logowania
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        
        // Sprawdzenie poświadczeń (w rzeczywistości powinny być przechowywane bezpiecznie)
        if ($username === 'admin' && $password === 'admin123') {
            $_SESSION['admin_logged_in'] = true;
            writeLog("Użytkownik $username zalogował się pomyślnie");
        } else {
            $loginError = "Nieprawidłowa nazwa użytkownika lub hasło";
            writeLog("Nieudana próba logowania dla użytkownika $username");
        }
    }
    
    // Wyświetlenie formularza logowania
    ?>
    <!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panel administracyjny - Logowanie</title>
        <link rel="stylesheet" href="style.css">
        <style>
            .login-container {
                max-width: 400px;
                margin: 100px auto;
                padding: 20px;
                background: #fff;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
            .login-form {
                display: flex;
                flex-direction: column;
                gap: 15px;
            }
            .login-form input {
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 4px;
            }
            .login-form button {
                padding: 10px;
                background: #333;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            .error {
                color: red;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="login-container">
            <h2>Panel administracyjny</h2>
            <?php if (isset($loginError)): ?>
                <div class="error"><?php echo $loginError; ?></div>
            <?php endif; ?>
            <form class="login-form" method="post">
                <input type="text" name="username" placeholder="Nazwa użytkownika" required>
                <input type="password" name="password" placeholder="Hasło" required>
                <button type="submit" name="login">Zaloguj się</button>
            </form>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// Obsługa wylogowania
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: admin.php');
    exit;
}

// Obsługa usuwania emaila
if (isset($_POST['delete_email'])) {
    try {
        $db = new PDO("mysql:host=$host;dbname=baza5950_brcmaestro", $username, $password);
        $stmt = $db->prepare("DELETE FROM newsletter1 WHERE id = ?");
        $stmt->execute([$_POST['delete_email']]);
        writeLog("Usunięto email z ID: " . $_POST['delete_email']);
    } catch(PDOException $e) {
        writeLog("Błąd podczas usuwania emaila: " . $e->getMessage());
    }
}

// Pobranie listy zapisanych emaili
try {
    $db = new PDO("mysql:host=$host;dbname=baza5950_brcmaestro", $username, $password);
    $stmt = $db->query("SELECT * FROM newsletter1 ORDER BY data_zapisu DESC");
    $emails = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    writeLog("Błąd podczas pobierania listy emaili: " . $e->getMessage());
    $emails = [];
}

// Pobranie statystyk
try {
    $db = new PDO("mysql:host=$host;dbname=baza5950_brcmaestro", $username, $password);
    
    // Liczba zapisanych do newslettera
    $stmt = $db->query("SELECT COUNT(*) as total FROM newsletter1");
    $newsletterCount = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    
    // Liczba aktywnych subskrybentów
    $stmt = $db->query("SELECT COUNT(*) as active FROM newsletter1 WHERE status = 'aktywny'");
    $activeSubscribers = $stmt->fetch(PDO::FETCH_ASSOC)['active'];
    
    // Ostatnie 5 zapisów
    $stmt = $db->query("SELECT * FROM newsletter1 ORDER BY data_zapisu DESC LIMIT 5");
    $recentSubscribers = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    writeLog("Błąd podczas pobierania statystyk: " . $e->getMessage());
    $newsletterCount = 0;
    $activeSubscribers = 0;
    $recentSubscribers = [];
}

// Obsługa zapisywania treści strony
if (isset($_POST['save_page'])) {
    try {
        $db = new PDO("mysql:host=$host;dbname=baza5950_brcmaestro", $username, $password);
        $stmt = $db->prepare("INSERT INTO strony (nazwa, tytul, tresc) VALUES (?, ?, ?) 
                             ON DUPLICATE KEY UPDATE tytul = VALUES(tytul), tresc = VALUES(tresc)");
        $stmt->execute([$_POST['page_name'], $_POST['page_title'], $_POST['page_content']]);
        writeLog("Zapisano treść strony: " . $_POST['page_name']);
        $saveMessage = "Treść strony została zapisana pomyślnie.";
    } catch(PDOException $e) {
        writeLog("Błąd podczas zapisywania treści strony: " . $e->getMessage());
        $saveMessage = "Wystąpił błąd podczas zapisywania treści strony.";
    }
}

// Pobranie listy stron
try {
    $db = new PDO("mysql:host=$host;dbname=baza5950_brcmaestro", $username, $password);
    $stmt = $db->query("SELECT * FROM strony ORDER BY nazwa");
    $pages = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    writeLog("Błąd podczas pobierania listy stron: " . $e->getMessage());
    $pages = [];
}

// Pobranie treści wybranej strony
$currentPage = null;
if (isset($_GET['edit_page'])) {
    try {
        $db = new PDO("mysql:host=$host;dbname=baza5950_brcmaestro", $username, $password);
        $stmt = $db->prepare("SELECT * FROM strony WHERE nazwa = ?");
        $stmt->execute([$_GET['edit_page']]);
        $currentPage = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        writeLog("Błąd podczas pobierania treści strony: " . $e->getMessage());
    }
}

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

// Przygotuj kolory dla obramowania
$borderColors = array_map(function($color) {
    return str_replace('0.7', '1', $color);
}, $colors);

foreach ($pageStats as $stat) {
    $pageNames[] = $stat['page_name'];
    $visitCounts[] = $stat['visit_count'];
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRC Maestro - Panel Administracyjny</title>
    
    <!-- Meta tagi SEO -->
    <meta name="description" content="Panel administracyjny BRC Maestro - zarządzanie stroną internetową">
    <meta name="keywords" content="BRC Maestro, panel administracyjny, zarządzanie stroną">
    <meta name="author" content="BRC Maestro">
    <meta name="robots" content="noindex, nofollow">
    
    <!-- Style i skrypty -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="script.js"></script>
    <style>
        .admin-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }
        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .logout-btn {
            padding: 8px 15px;
            background: #333;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .admin-nav {
            background: #f5f5f5;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .admin-nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 15px;
        }
        .admin-nav a {
            color: #333;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 3px;
        }
        .admin-nav a:hover {
            background: #ddd;
        }
        .admin-nav a.active {
            background: #333;
            color: white;
        }
        .section {
            display: none;
        }
        .section.active {
            display: block;
        }
        .newsletter-stats, .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .stat-card h3 {
            margin-top: 0;
            color: #666;
        }
        .stat-card .number {
            font-size: 2em;
            font-weight: bold;
            color: #333;
        }
        .emails-table, .recent-subscribers table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .emails-table th, .emails-table td, .recent-subscribers th, .recent-subscribers td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .emails-table th, .recent-subscribers th {
            background: #f5f5f5;
        }
        .delete-btn {
            padding: 5px 10px;
            background: #ff4444;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .status-active {
            color: green;
        }
        .status-inactive {
            color: red;
        }
        .active-users {
            margin-top: 20px;
        }
        .user-list {
            list-style: none;
            padding: 0;
        }
        .user-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #eee;
        }
        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .user-avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #0066cc;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        .user-time {
            color: #666;
            font-size: 0.9em;
        }
        .chart-container {
            margin: 20px 0;
            padding: 20px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .chart-title {
            margin-bottom: 20px;
            color: #333;
        }
        .chart-wrapper {
            position: relative;
            height: 400px;
        }
        .recent-visits {
            margin: 20px 0;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .recent-visits table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        .recent-visits th, .recent-visits td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .recent-visits th {
            background: #f5f5f5;
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <div class="admin-header">
            <h1>Panel Administracyjny</h1>
            <a href="?logout=1" class="logout-btn">Wyloguj się</a>
        </div>

        <nav class="admin-nav">
            <ul>
                <li><a href="#newsletter" class="active">Newsletter</a></li>
                <li><a href="#statystyki">Statystyki odwiedzin</a></li>
            </ul>
        </nav>

        <!-- Sekcja Newsletter -->
        <div id="newsletter" class="section active">
            <div class="newsletter-stats">
                <div class="stat-card">
                    <h3>Zapisani do newslettera</h3>
                    <div class="number"><?php echo $newsletterCount; ?></div>
                </div>
                <div class="stat-card">
                    <h3>Aktywni subskrybenci</h3>
                    <div class="number"><?php echo $activeSubscribers; ?></div>
                </div>
            </div>

            <div class="recent-subscribers">
                <h3>Ostatnie zapisy do newslettera</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Data zapisu</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($recentSubscribers as $subscriber): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($subscriber['email']); ?></td>
                            <td><?php echo htmlspecialchars($subscriber['data_zapisu']); ?></td>
                            <td class="status-<?php echo $subscriber['status'] === 'aktywny' ? 'active' : 'inactive'; ?>">
                                <?php echo htmlspecialchars($subscriber['status']); ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="emails-table">
                <h3>Wszyscy zapisani</h3>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Data zapisu</th>
                            <th>Status</th>
                            <th>Akcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($emails as $email): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($email['id']); ?></td>
                            <td><?php echo htmlspecialchars($email['email']); ?></td>
                            <td><?php echo htmlspecialchars($email['data_zapisu']); ?></td>
                            <td class="status-<?php echo $email['status'] === 'aktywny' ? 'active' : 'inactive'; ?>">
                                <?php echo htmlspecialchars($email['status']); ?>
                            </td>
                            <td>
                                <form method="post" style="display: inline;">
                                    <input type="hidden" name="delete_email" value="<?php echo $email['id']; ?>">
                                    <button type="submit" class="delete-btn" onclick="return confirm('Czy na pewno chcesz usunąć ten email?')">Usuń</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Sekcja Statystyki odwiedzin -->
        <div id="statystyki" class="section">
            <div class="stats-container">
                <div class="stat-card">
                    <h3>Dzisiejsze odwiedziny</h3>
                    <div class="number"><?php echo $todayVisits; ?></div>
                </div>
                <div class="stat-card">
                    <h3>Odwiedziny w tym miesiącu</h3>
                    <div class="number"><?php echo $monthlyVisits; ?></div>
                </div>
                <div class="stat-card">
                    <h3>Łączna liczba odwiedzin</h3>
                    <div class="number"><?php echo $totalVisits; ?></div>
                </div>
            </div>

            <div class="recent-visits">
                <h3>Ostatnie odwiedziny</h3>
                <table>
                    <thead>
                        <tr>
                            <th>IP</th>
                            <th>Strona</th>
                            <th>Data i czas</th>
                            <th>Czas spędzony</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $recentVisits = getRecentVisits();
                        foreach ($recentVisits as $visit): 
                        ?>
                        <tr>
                            <td><?php echo htmlspecialchars($visit['ip']); ?></td>
                            <td><?php echo htmlspecialchars($visit['page']); ?></td>
                            <td><?php echo htmlspecialchars($visit['visit_time']); ?></td>
                            <td><?php echo formatTimeSpent($visit['time_spent']); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="active-users">
                <h3>Obecnie na stronie (<?php echo count($activeUsers); ?>)</h3>
                <ul class="user-list">
                    <?php foreach ($activeUsers as $user): ?>
                    <li class="user-item">
                        <div class="user-info">
                            <div class="user-avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <div class="user-name"><?php echo htmlspecialchars($user['ip']); ?></div>
                                <div class="user-time">Odwiedza: <?php echo $user['page']; ?></div>
                            </div>
                        </div>
                        <div class="user-time">
                            <?php echo $user['time_spent']; ?>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="chart-container">
                <h3 class="chart-title">Statystyki odwiedzin stron (ostatnie 30 dni)</h3>
                <div class="chart-wrapper">
                    <canvas id="pageStatsChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Obsługa menu
        document.querySelectorAll('.admin-nav a').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const target = link.getAttribute('href').substring(1);
                
                // Aktualizacja aktywnych elementów menu
                document.querySelectorAll('.admin-nav a').forEach(a => a.classList.remove('active'));
                link.classList.add('active');
                
                // Pokazanie odpowiedniej sekcji
                document.querySelectorAll('.section').forEach(section => section.classList.remove('active'));
                document.getElementById(target).classList.add('active');
            });
        });

        // Inicjalizacja wykresu
        const ctx = document.getElementById('pageStatsChart').getContext('2d');
        const pageStatsChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($pageNames); ?>,
                datasets: [{
                    label: 'Liczba odwiedzin',
                    data: <?php echo json_encode($visitCounts); ?>,
                    backgroundColor: <?php echo json_encode($colors); ?>,
                    borderColor: <?php echo json_encode($borderColors); ?>,
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return `Odwiedziny: ${context.raw}`;
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>
</html> 