<?php
require_once 'visitors.php';
logVisit();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRC Maestro - Instalacje LPG | Profesjonalne montaże i serwis autogaz</title>
    
    <!-- Meta tagi SEO -->
    <meta name="description" content="BRC Maestro - profesjonalne instalacje LPG, montaż i serwis autogaz. Oferujemy instalacje gazowe w całej Polsce: Warszawa, Kraków, Rzeszów, Lublin, Świdnica, Mysłowice. Certyfikowane zakłady montażowe.">
    <meta name="keywords" content="BRC Maestro, instalacje LPG, montaż LPG, systemy gazowe, oszczędzanie paliwa, instalacje gazowe, samochody na gaz, autogaz, brc gaz, brc instalacje, brc instalacja, brc lpg, brc serwis, lubin lpg, brc warszawa, serwis brc, brc rzeszów, brc kraków, brc mysłowice, auto gaz świdnica, instalacje brc opinie, brc czakram, instalacja lpg brc, eliasz gaz, brc lublin">
    <meta name="author" content="BRC Maestro">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://brc-maestro.pl/">
    <meta property="og:title" content="BRC Maestro - Profesjonalne instalacje LPG i serwis autogaz">
    <meta property="og:description" content="Profesjonalne instalacje LPG i serwis autogaz w całej Polsce. Oszczędzaj na paliwie z BRC Maestro - certyfikowane zakłady montażowe.">
    <meta property="og:image" content="https://brc-maestro.pl/images/mlogo.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://brc-maestro.pl/">
    <meta property="twitter:title" content="BRC Maestro - Profesjonalne instalacje LPG">
    <meta property="twitter:description" content="Profesjonalne instalacje LPG dla Twojego samochodu. Oszczędzaj na paliwie z BRC Maestro.">
    <meta property="twitter:image" content="https://brc-maestro.pl/images/mlogo.png">

    <!-- Favicon -->
    <link href="https://brc-maestro.pl//images/favico.ico" rel="icon" type="image/vnd.microsoft.icon">
    
    <!-- Style i skrypty -->
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="index.php" aria-label="BRC Maestro - Strona główna">
                    <img src="images/mlogo.png" alt="BRC Maestro Logo" width="150" height="60">
                </a>
            </div>
            <div class="menu-toggle" aria-label="Menu główne">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav aria-label="Menu nawigacyjne">
                <ul>
                    <li><a href="index.php" aria-current="page">Strona główna</a></li>
                    <li><a href="galeria.php">Galeria Montaży</a></li>
                    <li><a href="zaklady.php">Zakłady Montażowe</a></li>
                    <li><a href="lista.php">Lista pojazdów</a></li>
                    <li><a href="o-nas.php">Piszą o nas</a></li>
                    <li><a href="https://brc-maestro.pl/formularz/formularz.html">Formularz</a></li>
                    <li><a href="kontakt.php">Kontakt</a></li>
                </ul>
            </nav>
        </div>
    </header>
	
	<main>
    <section class="hero" aria-label="Sekcja główna">
    <div class="container">
        <div class="hero-content">
            <h1>BRC Maestro - Profesjonalne instalacje LPG</h1>
            <h2>MOŻESZ JEŹDZIĆ TANIEJ</h2>
            <p class="hero-description">Zaawansowane systemy instalacji gazowej dla Twojego samochodu</p>
            <a href="kontakt.php" class="btn" aria-label="Skontaktuj się z nami">Skontaktuj się z nami</a>
        </div>
    </div>
	</section>
    <br />
    <section class="services" aria-label="Nasze usługi">
        <div class="container">
            <h2>BRC SEQUENT MAESTRO</h2>
            <div class="services-grid">
                <article class="service-card">
                    <img src="images/icon.png" alt="Zaawansowana technologia instalacji gazowej BRC Maestro" width="64" height="64">
                    <h3>Zaawansowana technologia instalacji gazowej</h3>
                    <p>BRC Sequent Maestro to zaawansowany system instalacji gazowej dedykowany do silników z bezpośrednim wtryskiem benzyny. Nasze rozwiązanie umożliwia konwersję silników benzynowych na ekologiczny i oszczędny tryb działania oparty na gazie LPG. Dzięki starannemu dopasowaniu do konkretnych modeli samochodów, zapewniamy optymalną wydajność i kompatybilność, przy zachowaniu najwyższych standardów bezpieczeństwa.</p>
                </article>
                <article class="service-card">
                    <img src="images/icon.png" alt="Unikalna strategia oszczędności BRC Maestro" width="64" height="64">
                    <h3>Unikalna strategia oszczędności</h3>
                    <p>Innowacyjność systemu BRC Sequent Maestro polega na realnym obniżeniu dawkowania benzyny do zaledwie 3-5% zużycia paliwa przez silnik. W przeciwieństwie do konkurencyjnych systemów, nasza instalacja uruchamia wtryskiwacze benzynowe nie w każdym cyklu pracy silnika, co powoduje radykalne zmniejszenie zużycia benzyny podczas jazdy na LPG. To przekłada się na znaczące oszczędności dla Twojego portfela i mniejsze obciążenie dla środowiska.</p>
                </article>
                <article class="service-card">
                    <img src="images/icon.png" alt="Szybkie przełączanie i ochrona wtryskiwaczy BRC Maestro" width="64" height="64">
                    <h3>Szybkie przełączanie i ochrona wtryskiwaczy</h3>
                    <p>W samochodach z instalacją BRC Sequent Maestro znacząco skróciliśmy fazę rozgrzewania silnika. Przejście jednostki napędowej na zasilanie LPG następuje w bardzo krótkim czasie, co dodatkowo ogranicza zużycie benzyny. Ponadto, nasza strategia wysterowania pracy wtryskiwaczy benzynowych sprawia, że jednorazowo dawkują one większe porcje paliwa, co jest dla nich znacznie korzystniejsze niż ciągła praca z minimalnymi dawkami - przedłużając tym samym żywotność wtryskiwaczy.</p>
                </article>
            </div>
        </div>
    </section>
</main>
	

<section class="image-text-section" aria-label="Informacje o technologii">
    <div class="">
        <div class="image-container">
            <img src="images/1c.webp" alt="Technologia BRC Sequent Maestro - Ochrona wtryskiwaczy" class="background-image" width="1920" height="1080">
            <div class="text-overlay">
                <div class="text-content">
                    <p>Dawkowanie minimalnej ilości benzyny przez wtryskiwacze powoduje, że na ich końcówkach osadzają się produkty spalania powstające z "cieknącej" benzyny. W BRC Sequent Maestro taka sytuacja nie ma miejsca. To, że wtryskiwacze otwierane są rzadziej i na dłuższy czas powoduje, że ich końcówki przepłukują się i skutecznie usuwają produkty spalania. Większy przepływ benzyny zwiększa też efekt chłodzący we wtryskiwaczach.</p>
                </div>
            </div>
        </div>
    </div>
</section>

     <!-- Formularz -->
    <div class="container">
        <div class="form-panel">
            <h2>Kalkulator oszczędności</h2>
            <form id="oszczednosciForm" method="post" action="">
                <div class="form-group">
                    <label for="benzyna">Cena benzyny za litr:</label>
                    <input type="number" step="0.01" id="benzyna" name="benzyna" required>
                </div>

                <div class="form-group">
                    <label for="lpg">Cena LPG za litr:</label>
                    <input type="number" step="0.01" id="lpg" name="lpg" required>
                </div>

                <div class="form-group">
                    <label for="zuzycie_benzyna">Zużycie benzyny na 100 km:</label>
                    <input type="number" step="0.1" id="zuzycie_benzyna" name="zuzycie_benzyna" required>
                </div>

                <div class="form-group">
                    <label for="przebieg">Miesięczny przebieg (km):</label>
                    <input type="number" step="1" id="przebieg" name="przebieg" required>
                </div>

                <div class="form-group">
                    <label for="koszt_instalacji">Cena instalacji LPG z montażem:</label>
                    <input type="number" step="1" id="koszt_instalacji" name="koszt_instalacji" required>
                </div>

                <div class="form-group">
                    <input type="submit" value="Oblicz oszczędności">
                </div>
            </form>
        </div>
		
		 <!-- Panel wyników po prawej stronie -->
        <div class="results-panel">
            <h3>Wyniki oszczędności:</h3>
            <p><strong>Oszczędności miesięczne: </strong><span id="oszczednosci"></span> PLN</p>
            <p><strong>Okres zwrotu instalacji: </strong><span id="okres_zwrotu"></span> miesięcy</p>
        </div>
    </div>
    
    <div class="form-redirect">
        <a href="https://brc-maestro.pl/formularz/formularz.html" class="form-button">
        <i class="fas fa-file-alt"></i>
            Przejdź do formularza 
        </a>
    </div>
    

    <script>
        // Obsługuje formularz po kliknięciu "Oblicz oszczędności"
        document.getElementById('oszczednosciForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Pobieramy wartości z formularza
            var benzyna = parseFloat(document.getElementById('benzyna').value);
            var lpg = parseFloat(document.getElementById('lpg').value);
            var zuzycie_benzyna = parseFloat(document.getElementById('zuzycie_benzyna').value);
            var przebieg = parseFloat(document.getElementById('przebieg').value);
            var koszt_instalacji = parseFloat(document.getElementById('koszt_instalacji').value);

            // Obliczenia:
            var zuzycie_lpg = zuzycie_benzyna * 1.15; // Zużycie gazu to 115% zużycia benzyny
            var koszt_benzyna_100km = (benzyna * zuzycie_benzyna);
            var koszt_lpg_100km = (lpg * zuzycie_lpg);

            // Koszt miesięczny
            var koszt_benzyna_miesieczny = koszt_benzyna_100km * (przebieg / 100);
            var koszt_lpg_miesieczny = koszt_lpg_100km * (przebieg / 100);

            // Oszczędności miesięczne - różnica między kosztem benzyny a LPG
            var oszczednosci_miesieczne = koszt_benzyna_miesieczny - koszt_lpg_miesieczny;

            // Okres zwrotu kosztów instalacji LPG
            var okres_zwrotu = (oszczednosci_miesieczne > 0) ? (koszt_instalacji / oszczednosci_miesieczne) : "Brak oszczędności - LPG jest droższe";
            if (typeof okres_zwrotu === "number") {
                okres_zwrotu = Math.ceil(okres_zwrotu); // Zaokrąglamy w górę do pełnych miesięcy
            }

            // Wyświetlanie wyników w panelu
            document.getElementById('oszczednosci').textContent = oszczednosci_miesieczne.toFixed(2);
            document.getElementById('okres_zwrotu').textContent = okres_zwrotu;
        });
    </script>
		

       <?php
        // Przetwarzanie formularza
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Pobieramy dane z formularza
            $benzyna = $_POST["benzyna"];
            $lpg = $_POST["lpg"];
            $zuzycie_benzyna = $_POST["zuzycie_benzyna"];
            $przebieg = $_POST["przebieg"];
            $koszt_instalacji = $_POST["koszt_instalacji"];

            // Obliczenia:
            // Zużycie gazu to 115% zużycia benzyny
            $zuzycie_lpg = $zuzycie_benzyna * 1.15;

            // Koszt przejechania 100 km na benzynie i LPG
            $koszt_benzyna_100km = ($benzyna * $zuzycie_benzyna);
            $koszt_lpg_100km = ($lpg * $zuzycie_lpg);

            // Koszt miesięczny na benzynie i LPG
            $koszt_benzyna_miesieczny = $koszt_benzyna_100km * ($przebieg / 100);
            $koszt_lpg_miesieczny = $koszt_lpg_100km * ($przebieg / 100);

            // Oszczędności miesięczne na LPG
            $oszczednosci_miesieczne = $koszt_benzyna_miesieczny - $koszt_lpg_miesieczny;

            // Okres zwrotu kosztów instalacji LPG
            if ($oszczednosci_miesieczne > 0) {
                $okres_zwrotu = $koszt_instalacji / $oszczednosci_miesieczne;
                $okres_zwrotu = round($okres_zwrotu, 2); // Zaokrąglamy wynik
            } else {
                $okres_zwrotu = "Brak oszczędności - LPG jest droższe";
            }

            // Wyświetlenie wyniku
            echo "<h2>Oszczędności miesięczne: " . round($oszczednosci_miesieczne, 2) . " PLN</h2>";
            echo "<h2>Okres zwrotu kosztów instalacji: " . $okres_zwrotu . " miesięcy</h2>";
        }
        ?>
    </div>
<br /><br
    <section class="services" aria-label="Kluczowe zalety">
        <div class="container">
            <h2>DLACZEGO BRC MAESTRO?</h2>
            <div class="services-grid">
                <article class="service-card">
                    <img src="images/icon.png" alt="Oszczędność paliwa BRC Maestro" width="64" height="64">
                    <h3>Maksymalna oszczędność</h3>
                    <p>Dzięki zaawansowanej technologii BRC Maestro, redukujemy zużycie benzyny do minimum, co przekłada się na znaczące oszczędności w Twoim portfelu. Nasz system zapewnia optymalne dawkowanie paliwa, maksymalizując korzyści ekonomiczne.</p>
                </article>
                <article class="service-card">
                    <img src="images/icon.png" alt="Bezpieczeństwo instalacji BRC Maestro" width="64" height="64">
                    <h3>Najwyższe bezpieczeństwo</h3>
                    <p>Każda instalacja BRC Maestro spełnia najwyższe standardy bezpieczeństwa. System wyposażony jest w zaawansowane zabezpieczenia i monitoring, zapewniając pełne bezpieczeństwo podczas eksploatacji.</p>
                </article>
                <article class="service-card">
                    <img src="images/icon.png" alt="Wydajność silnika BRC Maestro" width="64" height="64">
                    <h3>Optymalna wydajność</h3>
                    <p>Nasza technologia zapewnia płynne przejście między paliwami i zachowanie pełnej mocy silnika. BRC Maestro to gwarancja niezawodności i komfortu jazdy, bez utraty wydajności pojazdu.</p>
                </article>
            </div>
        </div>
    </section>
<br /><br />
    </main>
<!-- Stopka -->
    <?php include 'stopka.php'; ?>
</body>
</html>