<?php
require_once 'visitors.php';
logVisit();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRC Maestro - O Nas | Profesjonalne instalacje LPG i serwis autogaz</title>
    
    <!-- Meta tagi SEO -->
    <meta name="description" content="BRC Maestro - dowiedz się więcej o naszej firmie. Profesjonalne instalacje LPG i serwis autogaz w całej Polsce. Warszawa, Kraków, Rzeszów, Lublin, Świdnica, Mysłowice.">
    <meta name="keywords" content="BRC Maestro, o nas, instalacje LPG, montaż LPG, systemy gazowe, oszczędzanie paliwa, instalacje gazowe, samochody na gaz, autogaz, brc gaz, brc instalacje, brc instalacja, brc lpg, brc serwis, lubin lpg, brc warszawa, serwis brc, brc rzeszów, brc kraków, brc mysłowice, auto gaz świdnica, instalacje brc opinie, brc czakram, instalacja lpg brc, eliasz gaz, brc lublin">
    <meta name="author" content="BRC Maestro">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://brc-maestro.pl/o-nas.php">
    <meta property="og:title" content="BRC Maestro - O Nas | Profesjonalne instalacje LPG i serwis autogaz">
    <meta property="og:description" content="Poznaj BRC Maestro - lidera w instalacjach LPG i serwisie autogaz. Profesjonalne usługi w całej Polsce.">
    <meta property="og:image" content="https://brc-maestro.pl/images/mlogo.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://brc-maestro.pl/o-nas.php">
    <meta property="twitter:title" content="BRC Maestro - O Nas | Profesjonalne instalacje LPG i serwis autogaz">
    <meta property="twitter:description" content="Poznaj BRC Maestro - lidera w instalacjach LPG i serwisie autogaz. Profesjonalne usługi w całej Polsce.">
    <meta property="twitter:image" content="https://brc-maestro.pl/images/mlogo.png">

    <!-- Favicon -->
    <link href="https://brc-maestro.pl/images/favico.ico" rel="icon" type="image/vnd.microsoft.icon">
    
    <!-- Style i skrypty -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    
    <!-- Facebook SDK -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v18.0" nonce="YOUR_NONCE_VALUE"></script>
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
                    <li><a href="index.php">Strona główna</a></li>
                    <li><a href="galeria.php">Galeria Montaży</a></li>
                    <li><a href="zaklady.php">Zakłady Montażowe</a></li>
                    <li><a href="lista.php">Lista pojazdów</a></li>
                    <li><a href="o-nas.php" aria-current="page">Piszą o nas</a></li>
                    <li><a href="https://brc-maestro.pl/formularz/formularz.html">Formularz</a></li>
                    <li><a href="kontakt.php">Kontakt</a></li>
                </ul>
            </nav>
        </div>
    </header>
	
	<main>
    <section class="hero" aria-label="O nas">
    <div class="container">
        <div class="hero-content">
            <h1>O nas</h1>
            <h2>PISZĄ O NAS</h2>
            <p class="hero-description">Poznaj opinie i referencje</p>
        </div>
    </div>
	</section>
    
    <section class="services">
        <div class="container">
            <h2>Piszą o nas</h2>
        </div>
        <div class="services-cards">

    <!-- Karta 1 -->
    <div class="service-card-horizontal">
        <div class="card-image">
            <img src="images/Ford-Edge-2-0-EcoBoost-LPG.webp" alt="BRC Maestro w Fordzie Edge (2019) – 2.0 242 KM (R9CB)">
        </div>
        <div class="card-content">
            <h3>BRC Maestro w Fordzie Edge (2019) – 2.0 242 KM (R9CB)</h3>
            <p>Druga generacja Forda Edge została po raz pierwszy zaprezentowana w 2014 r. W odróżnieniu od pierwszej generacji, samochód powstał jako model globalny w ramach strategii One Ford.</p>
            <a href="https://gazeo.pl/informacje/samochody/osobowe/BRC-Maestro-w-Fordzie-Edge-2019-2.0-242-KM-R9CB,artykul,11321.html" class="btn">Więcej na gazeo.pl</a>
            
            <!-- Przycisk udostępniania -->
            <div class="share-counter">
                <button class="share-btn" data-url="https://gazeo.pl/informacje/samochody/osobowe/BRC-Maestro-w-Fordzie-Edge-2019-2.0-242-KM-R9CB,artykul,11321.html">
                    Udostępnij na Facebooku
                </button>
                <span class="share-count">0</span> udostępnień
            </div>
        </div>
    </div>

    <!-- Karta 2 -->
    <div class="service-card-horizontal">
        <div class="card-image">
            <img src="images/Nissan-Titan.webp" alt="Nowe opracowania BRC Sequent Maestro">
        </div>
        <div class="card-content">
            <h3>Nowe opracowania BRC Sequent Maestro</h3>
            <p>Lista jednostek napędowych, które można poddać konwersji na zasilanie LPG z wykorzystaniem gazowego układu zasilania BRC Sequent Maestro jest coraz dłuższa...</p>
            <a href="https://gazeo.pl/informacje/wiadomosci/Nowe-opracowania-BRC-Sequent-Maestro,wiadomosc,11372.html" class="btn">Więcej na gazeo.pl</a>
            
            <!-- Przycisk udostępniania -->
            <div class="share-counter">
                <button class="share-btn" data-url="https://gazeo.pl/informacje/wiadomosci/Nowe-opracowania-BRC-Sequent-Maestro,wiadomosc,11372.html">
                    Udostępnij na Facebooku
                </button>
                <span class="share-count">0</span> udostępnień
            </div>
        </div>
    </div>

    <!-- Karta 3 -->
    <div class="service-card-horizontal">
        <div class="card-image">
            <img src="images/bmw_z4.webp" alt="Instalacja LPG Maestro BMW">
        </div>
        <div class="card-content">
            <h3>Lista opracowań BRC Sequent Maestro coraz dłuższa</h3>
            <p>Dział rozwoju Westport Fuel Systems pracuje pełną parą, czego wyrazem jest wydłużająca się lista opracowań instalacji BRC Sequent Maestro...</p>
            <a href="https://gazeo.pl/informacje/wiadomosci/Lista-opracowan-BRC-Sequent-Maestro-coraz-dluzsza,wiadomosc,11232.html" class="btn">Więcej na gazeo.pl</a>
            
            <!-- Przycisk udostępniania -->
            <div class="share-counter">
                <button class="share-btn" data-url="https://gazeo.pl/informacje/wiadomosci/Lista-opracowan-BRC-Sequent-Maestro-coraz-dluzsza,wiadomosc,11232.html">
                    Udostępnij na Facebooku
                </button>
                <span class="share-count">0</span> udostępnień
            </div>
        </div>
    </div>

    <!-- Karta 4 -->
    <div class="service-card-horizontal">
        <div class="card-image">
            <img src="images/1d.webp" alt="BRC Sequent Maestro">
        </div>
        <div class="card-content">
            <h3>BRC Sequent Maestro - przełomowy produkt na rynku instalacji LPG</h3>
            <p>Firma Czakram, oficjalny przedstawiciel BRC na polskim rynku ma w ofercie nowy system zasilania gazowego do silników z bezpośrednim wtryskiem benzyny...</p>
            <a href="https://gazeo.pl/informacje/instalacje/produkty/BRC-Sequent-Maestro-przelomowy-produkt-na-rynku-instalacji-LPG,artykul,10877.html" class="btn">Więcej na gazeo.pl</a>
            
            <!-- Przycisk udostępniania -->
            <div class="share-counter">
                <button class="share-btn" data-url="https://gazeo.pl/informacje/instalacje/produkty/BRC-Sequent-Maestro-przelomowy-produkt-na-rynku-instalacji-LPG,artykul,10877.html">
                    Udostępnij na Facebooku
                </button>
                <span class="share-count">0</span> udostępnień
            </div>
        </div>
    </div>

    <!-- Karta 5 -->
    <div class="service-card-horizontal">
        <div class="card-image">
            <img src="images/toyota-rav-4-lpg-brc-maestr.webp" alt="Toyota RAV4 LPG BRC MAESTRO">
        </div>
        <div class="card-content">
            <h3>BRC Sequent Maestro po 12 000 km</h3>
            <p>BRC Sequent Maestro to instalacja gazowa dedykowana do silników z bezpośrednim wtryskiem benzyny...</p>
            <a href="https://gazeo.pl/poradniki/eksploatacja/BRC-Sequent-Maestro-po-12-000-km,artykul,11100.html" class="btn">Więcej na gazeo.pl</a>
            
            <!-- Przycisk udostępniania -->
            <div class="share-counter">
                <button class="share-btn" data-url="https://gazeo.pl/poradniki/eksploatacja/BRC-Sequent-Maestro-po-12-000-km,artykul,11100.html">
                    Udostępnij na Facebooku
                </button>
                <span class="share-count">0</span> udostępnień
            </div>
        </div>
    </div>

    <!-- Karta 6 -->
    <div class="service-card-horizontal">
        <div class="card-image">
            <img src="images/instal-autogaz.webp" alt="BRC Maestro w Volvo XC 60">
        </div>
        <div class="card-content">
            <h3>BRC Maestro w Volvo XC 60 - Instal Autogaz Poznań</h3>
            <p>Warsztat Instal Autogaz z Poznania, posiadający także oddział w Lesznie, często montuje instalacje gazowe marki BRC...</p>
            <a href="https://gazeo.pl/informacje/warsztaty/BRC-Maestro-w-Volvo-XC-60-Instal-Autogaz-Poznan,artykul,10983.html" class="btn">Więcej na gazeo.pl</a>
            
            <!-- Przycisk udostępniania -->
            <div class="share-counter">
                <button class="share-btn" data-url="https://gazeo.pl/informacje/warsztaty/BRC-Maestro-w-Volvo-XC-60-Instal-Autogaz-Poznan,artykul,10983.html">
                    Udostępnij na Facebooku
                </button>
                <span class="share-count">0</span> udostępnień
            </div>
        </div>
    </div>

    <!-- Karta 7 -->
    <div class="service-card-horizontal">
        <div class="card-image">
            <img src="images/camry-brc-maestro.webp" alt="Toyota Camry 2.5 Hybrid LPG z BRC Sequent Maestro">
        </div>
        <div class="card-content">
            <h3>Toyota Camry 2.5 Hybrid LPG z BRC Sequent Maestro</h3>
            <p>Hybrydowe Toyoty uchodzą za znakomite auta pod kątem zasilania LPG...</p>
            <a href="https://gazeo.pl/informacje/samochody/testy/Toyota-Camry-2.5-Hybrid-LPG-z-BRC-Sequent-Maestro,test,11167.html" class="btn">Więcej na gazeo.pl</a>
            
            <!-- Przycisk udostępniania -->
            <div class="share-counter">
                <button class="share-btn" data-url="https://gazeo.pl/informacje/samochody/testy/Toyota-Camry-2.5-Hybrid-LPG-z-BRC-Sequent-Maestro,test,11167.html">
                    Udostępnij na Facebooku
                </button>
                <span class="share-count">0</span> udostępnień
            </div>
        </div>
    </div>

    <!-- Karta 8 -->
    <div class="service-card-horizontal">
        <div class="card-image">
            <img src="images/4a.webp" alt="HYUNDAI TUCSON 1 6 T GDI 2019 - Montaż LPG – BRC SQ MAESTRO">
        </div>
        <div class="card-content">
            <h3>HYUNDAI TUCSON 1 6 T GDI 2019 - Montaż LPG – BRC SQ MAESTRO</h3>
            <p>Firma Czakram prezentuje wykonany montaż sekwencyjnej instalacji gazowej marki BRC Sequent Maestro...</p>
            <a href="https://gazeo.pl/informacje/wideo/brc/Hyundai-Tucson-1.6-T-GDI-2019-z-BRC-Sequent-Maestro,brc,541.html" class="btn">Więcej na gazeo.pl</a>
            
            <!-- Przycisk udostępniania -->
            <div class="share-counter">
                <button class="share-btn" data-url="https://gazeo.pl/informacje/wideo/brc/Hyundai-Tucson-1.6-T-GDI-2019-z-BRC-Sequent-Maestro,brc,541.html">
                    Udostępnij na Facebooku
                </button>
                <span class="share-count">0</span> udostępnień
            </div>
        </div>
    </div>

    <!-- Karta 9 -->
    <div class="service-card-horizontal">
        <div class="card-image">
            <img src="images/4c.webp" alt="OPINIE O INSTALACJACH LPG">
        </div>
        <div class="card-content">
            <h3>OPINIE O INSTALACJACH LPG</h3>
            <p>Opinie o instalacji Lpg - Sequent Maestro</p>
            <a href="https://www.autocentrum.pl/opinie-lpg/szukaj/?installation=brc-sequent" class="btn">Więcej na autocentrum.pl</a>
            
            <!-- Przycisk udostępniania -->
            <div class="share-counter">
                <button class="share-btn" data-url="https://www.autocentrum.pl/opinie-lpg/szukaj/?installation=brc-sequent">
                    Udostępnij na Facebooku
                </button>
                <span class="share-count">0</span> udostępnień
            </div>
        </div>
    </div>

</div>

    </section>

</main>
<!-- Stopka -->
<?php include 'stopka.php'; ?>
</body>
</html>
