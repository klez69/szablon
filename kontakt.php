<?php
// kontakt.php
require_once 'dbt.php';
require_once 'visitors.php';
logVisit();

// Sprawdzenie czy zmienne są zdefiniowane
if (!isset($host) || !isset($username) || !isset($password) || !isset($dbname)) {
    error_log("Błąd: Brak wymaganych zmiennych konfiguracyjnych bazy danych");
    die("Błąd konfiguracji bazy danych");
}

$message = '';
$messageClass = '';
$newsletterMessage = '';
$newsletterMessageClass = '';

// Obsługa formularza kontaktowego
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message_content = htmlspecialchars($_POST['message']);
    
    // Walidacja
    if (empty($name) || empty($email) || empty($subject) || empty($message_content)) {
        $message = 'Proszę wypełnić wszystkie pola';
        $messageClass = 'error';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = 'Podaj poprawny adres email';
        $messageClass = 'error';
    } else {
        // Konfiguracja wiadomości email
        $to = "maestro@czakram.pl";
        $headers = "From: $name <$email>" . "\r\n";
        
        // Wysyłanie wiadomości
        if (mail($to, $subject, $message_content, $headers)) {
            $message = 'Wiadomość została wysłana. Dziękujemy za kontakt!';
            $messageClass = 'success';
        } else {
            $message = 'Wystąpił problem z wysłaniem wiadomości. Spróbuj ponownie później.';
            $messageClass = 'error';blem z wysłaniem wiadomości. Spróbuj ponownie później.';
        }   $messageClass = 'error';
    }   }
}   }
}
// Funkcja do logowania
function writeLog($message) {
    $logFile = 'logi.txt';) {
    $timestamp = date('Y-m-d H:i:s');
    $logMessage = "[$timestamp] $message\n";
    file_put_contents($logFile, $logMessage, FILE_APPEND);
}   file_put_contents($logFile, $logMessage, FILE_APPEND);
}
// Obsługa formularza newslettera
if (isset($_POST['newsletter_submit'])) {
    $newsletter_email = filter_var($_POST['newsletter_email'], FILTER_SANITIZE_EMAIL);
    writeLog("Próba zapisu do newslettera: " . $newsletter_email);TER_SANITIZE_EMAIL);
    writeLog("Próba zapisu do newslettera: " . $newsletter_email);
    if (filter_var($newsletter_email, FILTER_VALIDATE_EMAIL)) {
        try {r_var($newsletter_email, FILTER_VALIDATE_EMAIL)) {
            // Połączenie z bazą danych
            writeLog("Próba połączenia z bazą danych: host=$host, dbname=baza5950_brcmaestro, username=$username");
            $db = new PDO("mysql:host=$host;dbname=baza5950_brcmaestro", $username, $password);sername=$username");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);$username, $password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Sprawdzenie czy email już istnieje
            $stmt = $db->prepare("SELECT id FROM newsletter1 WHERE email = ?");
            $stmt->execute([$newsletter_email]); newsletter1 WHERE email = ?");
            $stmt->execute([$newsletter_email]);
            if (!$stmt->fetch()) {
                // Zapisywanie nowego emaila
                writeLog("Próba zapisu nowego emaila do bazy");
                $stmt = $db->prepare("INSERT INTO newsletter1 (id, email, data_zapisu, status) VALUES (NULL, ?, NOW(), 'aktywny')");
                $stmt->execute([$newsletter_email]);wsletter1 (id, email, data_zapisu, status) VALUES (NULL, ?, NOW(), 'aktywny')");
                writeLog("Email został pomyślnie zapisany");
                writeLog("Email został pomyślnie zapisany");
                $newsletterMessage = "Dziękujemy za zapisanie się do newslettera!";
                $newsletterMessageClass = "success";zapisanie się do newslettera!";
            } else {sletterMessageClass = "success";
                writeLog("Email już istnieje w bazie");
                $newsletterMessage = "Ten adres email jest już zapisany do newslettera.";
                $newsletterMessageClass = "error";ail jest już zapisany do newslettera.";
            }   $newsletterMessageClass = "error";
        } catch(PDOException $e) {
            // Logowanie szczegółowego błędu
            writeLog("Błąd bazy danych newslettera: " . $e->getMessage());
            writeLog("Szczegóły połączenia: host=$host, dbname=baza5950_brcmaestro, username=$username");
            writeLog("Kod błędu: " . $e->getCode());st, dbname=baza5950_brcmaestro, username=$username");
            writeLog("Trace: " . $e->getTraceAsString());
            writeLog("Zapytanie SQL: " . $stmt->queryString ?? 'Brak zapytania');
            $newsletterMessage = "Wystąpił problem z zapisem do newslettera. Spróbuj ponownie później.";blem z zapisem do newslettera. Spróbuj ponownie później.";
            $newsletterMessageClass = "error";   $newsletterMessageClass = "error";
        }
    } else {
        writeLog("Nieprawidłowy format emaila: " . $newsletter_email););
        $newsletterMessage = "Proszę podać prawidłowy adres email."; prawidłowy adres email.";
        $newsletterMessageClass = "error";   $newsletterMessageClass = "error";
    }   }
}
?>?>

<!DOCTYPE html>
<html lang="pl">lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRC Maestro - Kontakt | Profesjonalne instalacje LPG i serwis autogaz</title><title>BRC Maestro - Kontakt | Profesjonalne instalacje LPG i serwis autogaz</title>
    
    <!-- Meta tagi SEO -->
    <meta name="description" content="BRC Maestro - kontakt do naszych zakładów montażowych w całej Polsce. Warszawa, Kraków, Rzeszów, Lublin, Świdnica, Mysłowice. Profesjonalne instalacje LPG i serwis autogaz.">
    <meta name="keywords" content="BRC Maestro, kontakt, instalacje LPG, montaż LPG, systemy gazowe, oszczędzanie paliwa, instalacje gazowe, samochody na gaz, autogaz, brc gaz, brc instalacje, brc instalacja, brc lpg, brc serwis, lubin lpg, brc warszawa, serwis brc, brc rzeszów, brc kraków, brc mysłowice, auto gaz świdnica, instalacje brc opinie, brc czakram, instalacja lpg brc, eliasz gaz, brc lublin">, kontakt, instalacje LPG, montaż LPG, systemy gazowe, oszczędzanie paliwa, instalacje gazowe, samochody na gaz, autogaz, brc gaz, brc instalacje, brc instalacja, brc lpg, brc serwis, lubin lpg, brc warszawa, serwis brc, brc rzeszów, brc kraków, brc mysłowice, auto gaz świdnica, instalacje brc opinie, brc czakram, instalacja lpg brc, eliasz gaz, brc lublin">
    <meta name="author" content="BRC Maestro">
    <meta name="robots" content="index, follow"><meta name="robots" content="index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://brc-maestro.pl/kontakt.php">
    <meta property="og:title" content="BRC Maestro - Kontakt | Profesjonalne instalacje LPG i serwis autogaz">
    <meta property="og:description" content="Skontaktuj się z naszymi zakładami montażowymi w całej Polsce. Profesjonalne instalacje LPG i serwis autogaz - BRC Maestro.">montażowymi w całej Polsce. Profesjonalne instalacje LPG i serwis autogaz - BRC Maestro.">
    <meta property="og:image" content="https://brc-maestro.pl/images/mlogo.png">    <meta property="og:image" content="https://brc-maestro.pl/images/mlogo.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://brc-maestro.pl/kontakt.php">
    <meta property="twitter:title" content="BRC Maestro - Kontakt | Profesjonalne instalacje LPG i serwis autogaz">
    <meta property="twitter:description" content="Skontaktuj się z naszymi zakładami montażowymi w całej Polsce. Profesjonalne instalacje LPG i serwis autogaz - BRC Maestro.">montażowymi w całej Polsce. Profesjonalne instalacje LPG i serwis autogaz - BRC Maestro.">
    <meta property="twitter:image" content="https://brc-maestro.pl/images/mlogo.png">    <meta property="twitter:image" content="https://brc-maestro.pl/images/mlogo.png">

    <!-- Favicon -->
    <link href="https://brc-maestro.pl/images/favico.ico" rel="icon" type="image/vnd.microsoft.icon"><link href="https://brc-maestro.pl/images/favico.ico" rel="icon" type="image/vnd.microsoft.icon">
    
    <!-- Style i skrypty -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script> src="script.js"></script>
    <style>
        .map-section {
            padding: 40px 0;
            background-color: #f5f5f5;   background-color: #f5f5f5;
        }
        .map-container {
            width: 100%;
            height: 500px;
            border-radius: 10px;px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);x rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;   margin-bottom: 20px;
        }
        .map-container iframe {frame {
            width: 100%;
            height: 100%;
            border: none;   border: none;
        }
        .route-planner {
            width: 100%;
            padding: 20px;
            background-color: #fff;ff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);   box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .route-planner h3 {
            margin-bottom: 15px;m: 15px;
            color: #333;   color: #333;
        }
        .route-form {
            display: flex;
            flex-direction: row;
            align-items: center;s: center;
            gap: 15px;   gap: 15px;
        }
        .route-form .form-group {group {
            display: flex;
            flex-direction: column;ction: column;
            gap: 5px;;
            flex: 1;   flex: 1;
        }
        .route-form input {{
            padding: 10px;
            border: 1px solid #ddd;ddd;
            border-radius: 5px;px;
            font-size: 16px;6px;
            width: 100%;   width: 100%;
        }
        .route-form input[readonly] {
            background-color: #f5f5f5;   background-color: #f5f5f5;
        }
        .route-form button {
            padding: 12px 24px;
            background-color: #ff0000;lor: #ff0000;
            color: white;
            border: none;
            border-radius: 5px;px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;nd-color 0.3s;
            white-space: nowrap;   white-space: nowrap;
        }
        .route-form button:hover {
            background-color: #cc0000;   background-color: #cc0000;
        }
        .contact-form-container {ner {
            font-size: 14px;   font-size: 14px;
        }
        .contact-form-container label {ner label {
            font-size: 14px;   font-size: 14px;
        }
        .contact-form-container input,
        .contact-form-container textarea {ner textarea {
            font-size: 14px;   font-size: 14px;
        }
        .newsletter-section p {p {
            font-size: 10px;
            margin-bottom: 13px;   margin-bottom: 13px;
        }
        .newsletter-content p {p {
            font-size: 12px;
            margin-bottom: 10px;   margin-bottom: 10px;
        }
    </style>
    <script>
        let map;
        let directionsService;
        let directionsRenderer;        let directionsRenderer;

        function initMap() {
            const czakramLocation = { lat: 50.02756897941761, lng: 20.957448715717012 };const czakramLocation = { lat: 50.02756897941761, lng: 20.957448715717012 };
            
            map = new google.maps.Map(document.querySelector('.map-container'), {cument.querySelector('.map-container'), {
                center: czakramLocation,czakramLocation,
                zoom: 15 zoom: 15
            });            });

            directionsService = new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer({derer = new google.maps.DirectionsRenderer({
                map: map,
                suppressMarkers: false suppressMarkers: false
            });            });

            // Dodaj marker dla lokalizacji CZAKRAMlizacji CZAKRAM
            new google.maps.Marker({
                position: czakramLocation, czakramLocation,
                map: map,
                title: 'CZAKRAM Sp. z o.o.' title: 'CZAKRAM Sp. z o.o.'
            });   });
        }        }

        function calculateRoute(event) {nt) {
            event.preventDefault();
            const start = document.getElementById('start').value;lue;
            const end = document.getElementById('end').value;
            const url = `https://www.google.com/maps/dir/?api=1&origin=${encodeURIComponent(start)}&destination=${encodeURIComponent(end)}`;ogle.com/maps/dir/?api=1&origin=${encodeURIComponent(start)}&destination=${encodeURIComponent(end)}`;
            window.open(url, '_blank');   window.open(url, '_blank');
        }
    </script>cript>
</head>>
<body>
    <header>
        <div class="container">>
            <div class="logo">
                <a href="index.php" aria-label="BRC Maestro - Strona główna">
                    <img src="images/mlogo.png" alt="BRC Maestro Logo" width="150" height="60"><img src="images/mlogo.png" alt="BRC Maestro Logo" width="150" height="60">
                </a>a>
            </div>
            <div class="menu-toggle" aria-label="Menu główne">toggle" aria-label="Menu główne">
                <span></span>
                <span></span>
                <span></span>pan></span>
            </div>
            <nav aria-label="Menu nawigacyjne">a-label="Menu nawigacyjne">
                <ul>
                    <li><a href="index.php">Strona główna</a></li>
                    <li><a href="galeria.php">Galeria Montaży</a></li>
                    <li><a href="zaklady.php">Zakłady Montażowe</a></li></li>
                    <li><a href="lista.php">Lista pojazdów</a></li>li>
                    <li><a href="o-nas.php">Piszą o nas</a></li>
                    <li><a href="https://brc-maestro.pl/formularz/formularz.html">Formularz</a></li>Formularz</a></li>
                    <li><a href="kontakt.php" aria-current="page">Kontakt</a></li>li><a href="kontakt.php" aria-current="page">Kontakt</a></li>
                </ul>ul>
            </nav>nav>
        </div>>
    </header>    </header>

    <main>
        <section class="hero" aria-label="Kontakt">label="Kontakt">
            <div class="container">
                <div class="hero-content">tent">
                    <h1>Kontakt</h1>
                    <h2>SKONTAKTUJ SIĘ Z NAMI</h2>
                    <p class="hero-description">Jesteśmy do Twojej dyspozycji</p> class="hero-description">Jesteśmy do Twojej dyspozycji</p>
                </div>div>
            </div>
        </section>        </section>

        <section class="contact-section">tion">
            <div class="container">
                <div class="contact-grid">
                    <div class="contact-info">
                        <h2>Informacje kontaktowe</h2>we</h2>
                        <div class="info-item">
                            <i class="fas fa-map-marker-alt"></i>ass="fas fa-map-marker-alt"></i>
                            <div>
                                <h3>Adres</h3>
                                <p>ul. Dojazd 1<br>33-100 Tarnów</p>>ul. Dojazd 1<br>33-100 Tarnów</p>
                            </div>div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-phone"></i>ass="fas fa-phone"></i>
                            <div>
                                <h3>Telefon</h3>
                                <p>+48 14 640 00 90</p>
                                <p>+48 14 640 00 91</p>>+48 14 640 00 91</p>
                            </div>div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-envelope"></i>ass="fas fa-envelope"></i>
                            <div>
                                <h3>Email</h3>
                                <p><a href="mailto:maestro@czakram.pl" class="contact-link">maestro@czakram.pl</a></p>><a href="mailto:maestro@czakram.pl" class="contact-link">maestro@czakram.pl</a></p>
                            </div>div>
                        </div>div>
                    </div>                    </div>

                    <div class="contact-form-container">er">
                        <?php if($message != ''): ?>
                        <div class="message <?php echo $messageClass; ?>">cho $messageClass; ?>">
                            <?php echo $message; ?>php echo $message; ?>
                        </div>
                        <?php endif; ?>                        <?php endif; ?>

                        <form action="kontakt.php" method="post" class="contact-form">ethod="post" class="contact-form">
                            <div class="form-group">
                                <label for="name">Imię i nazwisko *</label>
                                <input type="text" id="name" name="name" required placeholder="Wprowadź swoje imię i nazwisko">nput type="text" id="name" name="name" required placeholder="Wprowadź swoje imię i nazwisko">
                            </div>
                            <div class="form-group">
                                <label for="email">Adres e-mail *</label>
                                <input type="email" id="email" name="email" required placeholder="Wprowadź swój adres e-mail">nput type="email" id="email" name="email" required placeholder="Wprowadź swój adres e-mail">
                            </div>
                            <div class="form-group">
                                <label for="subject">Temat wiadomości *</label>
                                <input type="text" id="subject" name="subject" required placeholder="Wprowadź temat wiadomości">nput type="text" id="subject" name="subject" required placeholder="Wprowadź temat wiadomości">
                            </div>
                            <div class="form-group">
                                <label for="message">Treść wiadomości *</label>
                                <textarea id="message" name="message" rows="2" required placeholder="Wprowadź treść swojej wiadomości"></textarea>extarea id="message" name="message" rows="2" required placeholder="Wprowadź treść swojej wiadomości"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn">Wyślij wiadomość</button>utton type="submit" class="btn">Wyślij wiadomość</button>
                            </div>
                            <p class="form-note">* Pola oznaczone gwiazdką są wymagane</p>class="form-note">* Pola oznaczone gwiazdką są wymagane</p>
                        </form>form>
                    </div>div>
                </div>div>
            </div>
        </section>        </section>

        <section class="map-section">">
            <div class="container">
                <div class="map-container">map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2562.0495473312883!2d20.957448715717012!3d50.02756897941761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473d85bb3a8ed75f%3A0x5c1f2c9cf6ac188f!2sDojazd%201%2C%2033-100%20Tarn%C3%B3w!5e0!3m2!1spl!2spl!4v1650000000000!5m2!1spl!2spl" www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2562.0495473312883!2d20.957448715717012!3d50.02756897941761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473d85bb3a8ed75f%3A0x5c1f2c9cf6ac188f!2sDojazd%201%2C%2033-100%20Tarn%C3%B3w!5e0!3m2!1spl!2spl!4v1650000000000!5m2!1spl!2spl" 
                        width="100%" 
                        height="500" 
                        style="border:0;" 
                        allowfullscreen="" ="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">rerpolicy="no-referrer-when-downgrade">
                    </iframe>iframe>
                </div>
                <div class="route-planner">
                    <h3>Zaplanuj trasę do nas</h3>
                    <form id="routeForm" class="route-form" onsubmit="calculateRoute(event)">route-form" onsubmit="calculateRoute(event)">
                        <div class="form-group">
                            <label for="start">Twój adres startowy:</label>
                            <input type="text" id="start" name="start" required placeholder="Wpisz swój adres">nput type="text" id="start" name="start" required placeholder="Wpisz swój adres">
                        </div>
                        <div class="form-group">
                            <label for="end">Adres docelowy:</label>
                            <input type="text" id="end" name="end" value="ul. Dojazd 1, 33-100 Tarnów" readonly>nput type="text" id="end" name="end" value="ul. Dojazd 1, 33-100 Tarnów" readonly>
                        </div>
                        <button type="submit" class="btn">Wyznacz trasę</button>tton type="submit" class="btn">Wyznacz trasę</button>
                    </form>form>
                </div>div>
            </div>
        </section>        </section>

        <section class="newsletter-section">section">
            <div class="container">
                <div class="newsletter-content">content">
                    <h2>Newsletter</h2>
                    <p>Zapisz się do naszego newslettera, aby otrzymywać najnowsze informacje i promocje</p>aby otrzymywać najnowsze informacje i promocje</p>
                    <?php if($newsletterMessage != ''): ?>
                    <div class="message <?php echo $newsletterMessageClass; ?>">etterMessageClass; ?>">
                        <?php echo $newsletterMessage; ?>php echo $newsletterMessage; ?>
                    </div>
                    <?php endif; ?>
                    <form class="newsletter-form" method="post" action="kontakt.php">" method="post" action="kontakt.php">
                        <div class="form-group">
                            <input type="email" name="newsletter_email" placeholder="Twój adres email" required>nput type="email" name="newsletter_email" placeholder="Twój adres email" required>
                        </div>
                        <button type="submit" name="newsletter_submit" class="btn">Zapisz się</button>tton type="submit" name="newsletter_submit" class="btn">Zapisz się</button>
                    </form>form>
                </div>div>
            </div>
        </section>ection>
    </main>
<!-- Stopka -->
    <?php include 'stopka.php'; ?>hp include 'stopka.php'; ?>
</body>
</html></html>

