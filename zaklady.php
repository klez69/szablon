<?php
require_once 'visitors.php';
logVisit();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRC Maestro - Zakłady Montażowe | Profesjonalne instalacje LPG i serwis autogaz</title>

    <!-- Meta tagi SEO -->
    <meta name="description" content="BRC Maestro - znajdź najbliższy zakład montażowy. Profesjonalne instalacje LPG i serwis autogaz w całej Polsce. Warszawa, Kraków, Rzeszów, Lublin, Świdnica, Mysłowice.">
    <meta name="keywords" content="BRC Maestro, zakłady montażowe, instalacje LPG, montaż LPG, systemy gazowe, oszczędzanie paliwa, instalacje gazowe, samochody na gaz, autogaz, brc gaz, brc instalacje, brc instalacja, brc lpg, brc serwis, lubin lpg, brc warszawa, serwis brc, brc rzeszów, brc kraków, brc mysłowice, auto gaz świdnica, instalacje brc opinie, brc czakram, instalacja lpg brc, eliasz gaz, brc lublin">
    <meta name="author" content="BRC Maestro">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://brc-maestro.pl/zaklady.php">
    <meta property="og:title" content="BRC Maestro - Zakłady Montażowe | Profesjonalne instalacje LPG i serwis autogaz">
    <meta property="og:description" content="Znajdź najbliższy zakład montażowy BRC Maestro. Profesjonalne instalacje LPG i serwis autogaz w całej Polsce.">
    <meta property="og:image" content="https://brc-maestro.pl/images/mlogo.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://brc-maestro.pl/zaklady.php">
    <meta property="twitter:title" content="BRC Maestro - Zakłady Montażowe | Profesjonalne instalacje LPG i serwis autogaz">
    <meta property="twitter:description" content="Znajdź najbliższy zakład montażowy BRC Maestro. Profesjonalne instalacje LPG i serwis autogaz w całej Polsce.">
    <meta property="twitter:image" content="https://brc-maestro.pl/images/mlogo.png">

    <!-- Favicon -->
    <link href="https://brc-maestro.pl/images/favico.ico" rel="icon" type="image/vnd.microsoft.icon">

    <!-- Style i skrypty -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
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
                    <li><a href="zaklady.php" aria-current="page">Zakłady Montażowe</a></li>
                    <li><a href="lista.php">Lista pojazdów</a></li>
                    <li><a href="o-nas.php">Piszą o nas</a></li>
                    <li><a href="https://brc-maestro.pl/formularz/formularz.html">Formularz</a></li>
                    <li><a href="kontakt.php">Kontakt</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero" aria-label="Zakłady montażowe">
            <div class="container">
                <div class="hero-content">
                    <h1>Zakłady Montażowe</h1>
                    <h2>SIEĆ AUTORYZOWANYCH MONTAŻYSTÓW</h2>
                    <p class="hero-description">Znajdź najbliższy zakład</p>
                </div>
            </div>
        </section>

        <section class="zaklady-section" aria-label="Lista zakładów montażowych">
            <div class="container">
                <div class="zaklady-content">
                    <h2>Lista zakładów montażowych</h2>
                    <p>Poniżej znajdziesz listę wszystkich zakładów montażowych BRC Maestro w Polsce. Wybierz najbliższy zakład i skontaktuj się z nim bezpośrednio.</p>

                    <div class="province-buttons">
                        <button class="province-button" data-province="dolnoslaskie">
                            <span class="province-name">Dolnośląskie</span>
                        </button>
                        <button class="province-button" data-province="kujawskopomorskie">
                            <span class="province-name">Kujawsko-Pomorskie</span>
                        </button>
                        <button class="province-button" data-province="lubelskie">
                            <span class="province-name">Lubelskie</span>
                        </button>
                        <button class="province-button" data-province="lubuskie">
                            <span class="province-name">Lubuskie</span>
                        </button>
                        <button class="province-button" data-province="lodzkie">
                            <span class="province-name">Łódzkie</span>
                        </button>
                        <button class="province-button" data-province="malopolskie">
                            <span class="province-name">Małopolskie</span>
                        </button>
                        <button class="province-button" data-province="mazowieckie">
                            <span class="province-name">Mazowieckie</span>
                        </button>
                        <button class="province-button" data-province="opolskie">
                            <span class="province-name">Opolskie</span>
                        </button>
                        <button class="province-button" data-province="podkarpackie">
                            <span class="province-name">Podkarpackie</span>
                        </button>
                        <button class="province-button" data-province="podlaskie">
                            <span class="province-name">Podlaskie</span>
                        </button>
                        <button class="province-button" data-province="pomorskie">
                            <span class="province-name">Pomorskie</span>
                        </button>
                        <button class="province-button" data-province="slaskie">
                            <span class="province-name">Śląskie</span>
                        </button>
                        <button class="province-button" data-province="swietokrzyskie">
                            <span class="province-name">Świętokrzyskie</span>
                        </button>
                        <button class="province-button" data-province="warminskomazurskie">
                            <span class="province-name">Warmińsko-Mazurskie</span>
                        </button>
                        <button class="province-button" data-province="wielkopolskie">
                            <span class="province-name">Wielkopolskie</span>
                        </button>
                        <button class="province-button" data-province="zachodniopomorskie">
                            <span class="province-name">Zachodniopomorskie</span>
                        </button>
                    </div>

                    <!-- Dolnośląskie -->
                    <div id="dolnoslaskie" class="zaklady-section">
                        <h3>Dolnośląskie</h3>
                        <div class="zaklady-selector">
                            <div class="zaklady-header">
                            </div>
                        </div>
                        <table class="zaklady-table" role="grid" aria-label="Lista zakładów montażowych w województwie dolnośląskim">
                            <thead>
                                <tr>
                                    <th scope="col">Nazwa Zakładu</th>
                                    <th scope="col">Adres</th>
                                    <th scope="col">Telefon</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>ABART SP. Z O.O.</strong></td>
                                    <td data-label="Adres">ul. Krzemieniecka 5, Wrocław</td>
                                    <td data-label="Telefon">71 3423252</td>
                                    <td data-label="Email"><a href="mailto:bok@abart.com.pl" aria-label="Wyślij email do ABART SP. Z O.O.">bok@abart.com.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>AMARGAZ ARTUR KRZYZANOWSKI</strong></td>
                                    <td data-label="Adres">ul. Junacka 50, Wrocław</td>
                                    <td data-label="Telefon">505 568 514</td>
                                    <td data-label="Email"><a href="mailto:amargaz@op.pl" aria-label="Wyślij email do AMARGAZ ARTUR KRZYZANOWSKI">amargaz@op.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>P.H.U. 'MARTIN SERWIS' MARCIN PIETRZYK</strong></td>
                                    <td data-label="Adres">ul. Łukasińskiego 7, Świdnica</td>
                                    <td data-label="Telefon">607 266 521</td>
                                    <td data-label="Email"><a href="mailto:martin_klx@poczta.fm" aria-label="Wyślij email do P.H.U. 'MARTIN SERWIS' MARCIN PIETRZYK">martin_klx@poczta.fm</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>EKO ALMA SERWIS SP. J. A.T. JAKUBOWSCY</strong></td>
                                    <td data-label="Adres">ul. Opolska 23, Oława</td>
                                    <td data-label="Telefon">71 3317389</td>
                                    <td data-label="Email"><a href="mailto:serwis@autogassystem.pl" aria-label="Wyślij email do EKO ALMA SERWIS SP. J. A.T. JAKUBOWSCY">serwis@autogassystem.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>AUTO SERWIS MARCIN MATEJKO</strong></td>
                                    <td data-label="Adres">Stary Lubin 17F, Lubin</td>
                                    <td data-label="Telefon">665 513 859</td>
                                    <td data-label="Email"><a href="mailto:marcinmatejko@onet.eu" aria-label="Wyślij email do AUTO SERWIS MARCIN MATEJKO">marcinmatejko@onet.eu</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>AUTO BRC SYSTEM TOMASZ SOSIK</strong></td>
                                    <td data-label="Adres">ul. Składowa 3, Świdnica</td>
                                    <td data-label="Telefon">74 8569443</td>
                                    <td data-label="Email"><a href="mailto:autobrc@op.pl" aria-label="Wyślij email do AUTO BRC SYSTEM TOMASZ SOSIK">autobrc@op.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>DOBRYGOWSKI SP. Z O.O.</strong></td>
                                    <td data-label="Adres">ul. Przemysłowa 1 E, Lubin</td>
                                    <td data-label="Telefon">502 536 276</td>
                                    <td data-label="Email"><a href="mailto:wojciech.majdanski@wp.pl" aria-label="Wyślij email do DOBRYGOWSKI SP. Z O.O.">wojciech.majdanski@wp.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>PRZEDSIĘBIORSTWO WIELOBRANŻOWE EXPRES-SERVICE DOMINIK KACZKOWSKI</strong></td>
                                    <td data-label="Adres">ul. Polna 4, Wałbrzych</td>
                                    <td data-label="Telefon">502 489 205</td>
                                    <td data-label="Email"><a href="mailto:dominik_auto_gaz@op.pl" aria-label="Wyślij email do PRZEDSIĘBIORSTWO WIELOBRANŻOWE EXPRES-SERVICE DOMINIK KACZKOWSKI">dominik_auto_gaz@op.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>SPARKO AUTO GAZ, KONRAD GAŁUSZA</strong></td>
                                    <td data-label="Adres">ul. Grabiszyńska 241 e, Wrocław</td>
                                    <td data-label="Telefon"></td>
                                    <td data-label="Email"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Kujawsko-pomorskie -->
                    <div id="kujawsko-pomorskie" class="zaklady-section">
                        <h3>Kujawsko-pomorskie</h3>
                        <table class="zaklady-table" role="grid" aria-label="Lista zakładów montażowych w województwie kujawsko-pomorskim">
                            <thead>
                                <tr>
                                    <th scope="col">Nazwa Zakładu</th>
                                    <th scope="col">Adres</th>
                                    <th scope="col">Telefon</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>INSTAL- GAZ ZBIGNIEW WIATROWSKI TOMASZ JAKUBCZYK</strong></td>
                                    <td data-label="Adres">ul. Glinki 149, Bydgoszcz</td>
                                    <td data-label="Telefon">52 3611754</td>
                                    <td data-label="Email"><a href="mailto:poczta@instalgaz.bydgoszcz.pl" aria-label="Wyślij email do INSTAL- GAZ ZBIGNIEW WIATROWSKI TOMASZ JAKUBCZYK">poczta@instalgaz.bydgoszcz.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>ART-POL JAROSŁAW CYWIŃSKI</strong></td>
                                    <td data-label="Adres">ul. Cukrowa 16, Białe Błota</td>
                                    <td data-label="Telefon">504 493 000</td>
                                    <td data-label="Email"><a href="mailto:artpol70@o2.pl" aria-label="Wyślij email do ART-POL JAROSŁAW CYWIŃSKI">artpol70@o2.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>LPG SERWIS MIROSŁAW JASIENIECKI</strong></td>
                                    <td data-label="Adres">Łęg Witoszyn 13 B, Fabianki</td>
                                    <td data-label="Telefon">600 899 964</td>
                                    <td data-label="Email"><a href="mailto:lpgserwisbrc@gmail.com" aria-label="Wyślij email do LPG SERWIS MIROSŁAW JASIENIECKI">lpgserwisbrc@gmail.com</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>AUTO GAZ CENTRUM WALCZEWSKI SEBASTIAN</strong></td>
                                    <td data-label="Adres">Toruńska 30, Bydgoszcz</td>
                                    <td data-label="Telefon">513 933 865</td>
                                    <td data-label="Email"><a href="mailto:sebamega78@o2.pl" aria-label="Wyślij email do AUTO GAZ CENTRUM WALCZEWSKI SEBASTIAN">sebamega78@o2.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>AUTO GAZ CENTRUM MACIEJ KAWECKI</strong></td>
                                    <td data-label="Adres">ul. Sokola 41, Toruń</td>
                                    <td data-label="Telefon"></td>
                                    <td data-label="Email"><a href="mailto:szymekpl3@wp.pl" aria-label="Wyślij email do AUTO GAZ CENTRUM MACIEJ KAWECKI">szymekpl3@wp.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>AUTO SERWIS INSTALACJE GAZOWE ARKADIUSZ SZYNALSKI SP.Z O.O.</strong></td>
                                    <td data-label="Adres">ul. Pod Dębową Górą 35/39, Toruń</td>
                                    <td data-label="Telefon">607 714 432</td>
                                    <td data-label="Email"><a href="mailto:a.szynalski2@gmail.com" aria-label="Wyślij email do AUTO SERWIS INSTALACJE GAZOWE ARKADIUSZ SZYNALSKI SP.Z O.O.">a.szynalski2@gmail.com</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>MOTOGAZ PAWEŁ KWIATKOWSKI</strong></td>
                                    <td data-label="Adres">ul. Dobrzyńska 60, Włocławek</td>
                                    <td data-label="Telefon">504 239 339</td>
                                    <td data-label="Email"><a href="mailto:kontakt@motogaz.com.pl" aria-label="Wyślij email do MOTOGAZ PAWEŁ KWIATKOWSKI">kontakt@motogaz.com.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>ARPOL MOTOR COMPANY SP. Z O.O.</strong></td>
                                    <td data-label="Adres">ul. Szosa Bydoska 52, Toruń</td>
                                    <td data-label="Telefon"></td>
                                    <td data-label="Email"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Lubelskie -->
                    <div id="lubelskie" class="zaklady-section">
                        <h3>Lubelskie</h3>
                        <table class="zaklady-table" role="grid" aria-label="Lista zakładów montażowych w województwie lubelskim">
                            <thead>
                                <tr>
                                    <th scope="col">Nazwa Zakładu</th>
                                    <th scope="col">Adres</th>
                                    <th scope="col">Telefon</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>SOLAR-CAR DZIUBA MIECZYSŁAW</strong></td>
                                    <td data-label="Adres">ul. Berberysowa 8, Lublin</td>
                                    <td data-label="Telefon">601 238 055</td>
                                    <td data-label="Email"><a href="mailto:info@solar-car.pl" aria-label="Wyślij email do SOLAR-CAR DZIUBA MIECZYSŁAW">info@solar-car.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>AUTO-MIK M.I.B. ŻUREK SP.J.</strong></td>
                                    <td data-label="Adres">Podzamcze 245, Łęczna</td>
                                    <td data-label="Telefon">81 7522848</td>
                                    <td data-label="Email"><a href="mailto:leczna@automik.pl" aria-label="Wyślij email do AUTO-MIK M.I.B. ŻUREK SP.J.">leczna@automik.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>USŁUGI MOTORYZACYJNE 'TECHCAR' SŁAWOMIR SKROBAŃSKI</strong></td>
                                    <td data-label="Adres">ul. Krzeszowska 64, Biłgoraj</td>
                                    <td data-label="Telefon">660 490 206</td>
                                    <td data-label="Email"><a href="mailto:slawek.skrobanski@gmail.com" aria-label="Wyślij email do USŁUGI MOTORYZACYJNE 'TECHCAR' SŁAWOMIR SKROBAŃSKI">slawek.skrobanski@gmail.com</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>AUTO-GAZ SŁAWOMIR PIEKARZ</strong></td>
                                    <td data-label="Adres">ul. Łęczyńska 56B, Lublin</td>
                                    <td data-label="Telefon">601 363 300</td>
                                    <td data-label="Email"><a href="mailto:info@auto-gaz.lublin.pl" aria-label="Wyślij email do AUTO-GAZ SŁAWOMIR PIEKARZ">info@auto-gaz.lublin.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>TRANS-MOTO-GAZ ANTONI NAGAJEK</strong></td>
                                    <td data-label="Adres">Lasy ul. Wrzosowa 21, Kraśnik</td>
                                    <td data-label="Telefon">509 277 915</td>
                                    <td data-label="Email"><a href="mailto:atnagajek@gmail.com" aria-label="Wyślij email do TRANS-MOTO-GAZ ANTONI NAGAJEK">atnagajek@gmail.com</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>F.H.U. AUTO-LIDER, JACEK ŚWIDZIŃSKI</strong></td>
                                    <td data-label="Adres">Charlęż Kolonia 36, Charlęż</td>
                                    <td data-label="Telefon">81 7577654</td>
                                    <td data-label="Email"><a href="mailto:autolider.gaz@o2.pl" aria-label="Wyślij email do F.H.U. AUTO-LIDER, JACEK ŚWIDZIŃSKI">autolider.gaz@o2.pl</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Lubuskie -->
                    <div id="lubuskie" class="zaklady-section">
                        <h3>Lubuskie</h3>
                        <table class="zaklady-table" role="grid" aria-label="Lista zakładów montażowych w województwie lubuskim">
                            <thead>
                                <tr>
                                    <th scope="col">Nazwa Zakładu</th>
                                    <th scope="col">Adres</th>
                                    <th scope="col">Telefon</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>EKOAUTO GAS SERWIS LECH OKORSKI</strong></td>
                                    <td data-label="Adres">ul. Chynowska 5, Zielona Góra</td>
                                    <td data-label="Telefon">509 412 911</td>
                                    <td data-label="Email"><a href="mailto:ekoauto3@wp.pl" aria-label="Wyślij email do EKOAUTO GAS SERWIS LECH OKORSKI">ekoauto3@wp.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>JETRONICS</strong></td>
                                    <td data-label="Adres">ul. Krótka 22, Gorzów Wielkopolski</td>
                                    <td data-label="Telefon">504 260 778</td>
                                    <td data-label="Email"><a href="mailto:biuro@jetronics.pl" aria-label="Wyślij email do JETRONICS">biuro@jetronics.pl</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Łódzkie -->
                    <div id="lodzkie" class="zaklady-section">
                        <h3>Łódzkie</h3>
                        <table class="zaklady-table" role="grid" aria-label="Lista zakładów montażowych w województwie łódzkim">
                            <thead>
                                <tr>
                                    <th scope="col">Nazwa Zakładu</th>
                                    <th scope="col">Adres</th>
                                    <th scope="col">Telefon</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>BLOKMAN PIOTR KRZYSZTOF WASIK</strong></td>
                                    <td data-label="Adres">ul. Złotno 25, Łódź</td>
                                    <td data-label="Telefon">601 993 938</td>
                                    <td data-label="Email"><a href="mailto:blokman@blokman.pl" aria-label="Wyślij email do BLOKMAN PIOTR KRZYSZTOF WASIK">blokman@blokman.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>GOMAR MOTORYZACJA ROBERT ŁYŻWA</strong></td>
                                    <td data-label="Adres">ul. Polna 16, Łask</td>
                                    <td data-label="Telefon">43 6752734</td>
                                    <td data-label="Email"><a href="mailto:gomar@onet.eu" aria-label="Wyślij email do GOMAR MOTORYZACJA ROBERT ŁYŻWA">gomar@onet.eu</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>AUTO-ZIMA ZIMNICKI DARIUSZ</strong></td>
                                    <td data-label="Adres">Zaosie 5, Ujazd</td>
                                    <td data-label="Telefon">608 860 518</td>
                                    <td data-label="Email"><a href="mailto:darek198625@wp.pl" aria-label="Wyślij email do AUTO-ZIMA ZIMNICKI DARIUSZ">darek198625@wp.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>ROB-GAZ ROBERT WÓJCIAK</strong></td>
                                    <td data-label="Adres">ul. Powstańców Wielkopolskich 28, Opoczno</td>
                                    <td data-label="Telefon">506 193 565</td>
                                    <td data-label="Email"><a href="mailto:rob-gaz@wp.pl" aria-label="Wyślij email do ROB-GAZ ROBERT WÓJCIAK">rob-gaz@wp.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>AUTO-GAZ TADEUSZ KRUPIŃSKI</strong></td>
                                    <td data-label="Adres">ul. Nowobielańska 26 A, Skierniewice</td>
                                    <td data-label="Telefon">504 164 688</td>
                                    <td data-label="Email"><a href="mailto:robkrup@poczta.wp.pl" aria-label="Wyślij email do AUTO-GAZ TADEUSZ KRUPIŃSKI">robkrup@poczta.wp.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>F.H.U. EKO-AUTO ROBERT GÓRSKI</strong></td>
                                    <td data-label="Adres">ul. Rokicińska 32, Łódź</td>
                                    <td data-label="Telefon">42 6739494</td>
                                    <td data-label="Email"><a href="mailto:eko-auto@eko-auto.com.pl" aria-label="Wyślij email do F.H.U. EKO-AUTO ROBERT GÓRSKI">eko-auto@eko-auto.com.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>A.R.G. ARTUR JABŁOŃSKI</strong></td>
                                    <td data-label="Adres">ul. Legionów 112, Łódź</td>
                                    <td data-label="Telefon">692274666</td>
                                    <td data-label="Email"><a href="mailto:autogaz.arg@vp.pl" aria-label="Wyślij email do A.R.G. ARTUR JABŁOŃSKI">autogaz.arg@vp.pl</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Małopolskie -->
                    <div id="malopolskie" class="zaklady-section">
                        <h3>Małopolskie</h3>
                        <table class="zaklady-table" role="grid" aria-label="Lista zakładów montażowych w województwie małopolskim">
                            <thead>
                                <tr>
                                    <th scope="col">Nazwa Zakładu</th>
                                    <th scope="col">Adres</th>
                                    <th scope="col">Telefon</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>CZAKRAM SP. Z O.O.</strong></td>
                                    <td data-label="Adres">ul. Dojazd 1, Tarnów</td>
                                    <td data-label="Telefon">14 6460090</td>
                                    <td data-label="Email"><a href="mailto:bok@czakram.pl" aria-label="Wyślij email do CZAKRAM SP. Z O.O.">bok@czakram.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>F.H.U. KARAT MARZENA ZIĘĆ</strong></td>
                                    <td data-label="Adres">ul. Centralna 62, Kraków</td>
                                    <td data-label="Telefon">508 187 622</td>
                                    <td data-label="Email"><a href="mailto:skp.karat@onet.eu" aria-label="Wyślij email do F.H.U. KARAT MARZENA ZIĘĆ">skp.karat@onet.eu</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>AUTO GAZ ARIES SPÓŁKA CYWILNA</strong></td>
                                    <td data-label="Adres">UL. Sobieskiego 1, Brzeszcze</td>
                                    <td data-label="Telefon">693 159 914</td>
                                    <td data-label="Email"><a href="mailto:info@autogazaries.pl" aria-label="Wyślij email do AUTO GAZ ARIES SPÓŁKA CYWILNA">info@autogazaries.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>AUTONAPRAWA, MOTO-GAZ MARCIN KORUS</strong></td>
                                    <td data-label="Adres">ul. Młyńska 56, Wadowice</td>
                                    <td data-label="Telefon">501 520 113</td>
                                    <td data-label="Email"><a href="mailto:korusgaz@post.pl" aria-label="Wyślij email do AUTONAPRAWA, MOTO-GAZ MARCIN KORUS">korusgaz@post.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>EKO-POWER-GAZ ANDRZEJ MAJKOWSKI</strong></td>
                                    <td data-label="Adres">ul. Nazaretańska 12, Kraków</td>
                                    <td data-label="Telefon">502 031 935</td>
                                    <td data-label="Email"><a href="mailto:ekopowergaz@gmail.com" aria-label="Wyślij email do EKO-POWER-GAZ ANDRZEJ MAJKOWSKI">ekopowergaz@gmail.com</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>STAR-GAZ TOMASZ CIAPAŁA</strong></td>
                                    <td data-label="Adres">ul. Krakowska 26, Stary Sącz</td>
                                    <td data-label="Telefon">505 329 335</td>
                                    <td data-label="Email"><a href="mailto:stargaz@interia.pl" aria-label="Wyślij email do STAR-GAZ TOMASZ CIAPAŁA">stargaz@interia.pl</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Mazowieckie -->
                    <div id="mazowieckie" class="zaklady-section">
                        <h3>Mazowieckie</h3>
                        <table class="zaklady-table" role="grid" aria-label="Lista zakładów montażowych w województwie mazowieckim">
                            <thead>
                                <tr>
                                    <th scope="col">Nazwa Zakładu</th>
                                    <th scope="col">Adres</th>
                                    <th scope="col">Telefon</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>ENERGY GAZ POLSKA</strong></td>
                                    <td data-label="Adres">ul. Ostrobramska 38 A, Warszawa</td>
                                    <td data-label="Telefon">22 8100090</td>
                                    <td data-label="Email"><a href="mailto:egp@egp.pl" aria-label="Wyślij email do ENERGY GAZ POLSKA">egp@egp.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>J.J. KARASIŃSCY S.C.</strong></td>
                                    <td data-label="Adres">al. Krakowska 14, Warszawa</td>
                                    <td data-label="Telefon">603 350 272</td>
                                    <td data-label="Email"><a href="mailto:autonagaz@autonagaz.waw.pl" aria-label="Wyślij email do J.J. KARASIŃSCY S.C.">autonagaz@autonagaz.waw.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>ADGAZ ADAM STĘPIEŃ</strong></td>
                                    <td data-label="Adres">ul. Wiśniowa 8a, Piaseczno</td>
                                    <td data-label="Telefon">509 191 929</td>
                                    <td data-label="Email"><a href="mailto:biuro.adgaz@gmail.com" aria-label="Wyślij email do ADGAZ ADAM STĘPIEŃ">biuro.adgaz@gmail.com</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>NOWOTCZYŃSKI PIOTR USŁUGI</strong></td>
                                    <td data-label="Adres">ul. Gdyńska 25, Mława</td>
                                    <td data-label="Telefon">501 387 642</td>
                                    <td data-label="Email"><a href="mailto:nowotczynski@wp.pl" aria-label="Wyślij email do NOWOTCZYŃSKI PIOTR USŁUGI">nowotczynski@wp.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>J-MAX JERZY KRZAK</strong></td>
                                    <td data-label="Adres">ul. Słomiana 14, Warszawa</td>
                                    <td data-label="Telefon">22 6649824</td>
                                    <td data-label="Email"><a href="mailto:biuro@slomianalpg.pl" aria-label="Wyślij email do J-MAX JERZY KRZAK">biuro@slomianalpg.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>WOLF-CAR SYLWESTER WILCZEK</strong></td>
                                    <td data-label="Adres">Aleksandrówka, ul. Główna 19, Kozienice</td>
                                    <td data-label="Telefon">692 342 888</td>
                                    <td data-label="Email"><a href="mailto:wolfcar1@wp.pl" aria-label="Wyślij email do WOLF-CAR SYLWESTER WILCZEK">wolfcar1@wp.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>LEGALIZACJA ZBIORNIKÓW LPG, AUTO-GAZ ŁUKASZ KOBZA</strong></td>
                                    <td data-label="Adres">ul. Warszawska 172, Radom</td>
                                    <td data-label="Telefon"></td>
                                    <td data-label="Email"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Opolskie -->
                    <div id="opolskie" class="zaklady-section">
                        <h3>Opolskie</h3>
                        <table class="zaklady-table" role="grid" aria-label="Lista zakładów montażowych w województwie opolskim">
                            <thead>
                                <tr>
                                    <th scope="col">Nazwa Zakładu</th>
                                    <th scope="col">Adres</th>
                                    <th scope="col">Telefon</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>AUTO-SERVICE-GAZ - ROBERT BIERNAT</strong></td>
                                    <td data-label="Adres">ul. Polna 18, Skoroszyce</td>
                                    <td data-label="Telefon">77 4318031</td>
                                    <td data-label="Email"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Podkarpackie -->
                    <div id="podkarpackie" class="zaklady-section">
                        <h3>Podkarpackie</h3>
                        <table class="zaklady-table" role="grid" aria-label="Lista zakładów montażowych w województwie podkarpackim">
                            <thead>
                                <tr>
                                    <th scope="col">Nazwa Zakładu</th>
                                    <th scope="col">Adres</th>
                                    <th scope="col">Telefon</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>F.H.U. WIKI GAZ GRZEGORZ BUŚ</strong></td>
                                    <td data-label="Adres">ul. Wolności 250, Mielec</td>
                                    <td data-label="Telefon">17 7889993</td>
                                    <td data-label="Email"><a href="mailto:fhuwikigaz@gmail.com" aria-label="Wyślij email do F.H.U. WIKI GAZ GRZEGORZ BUŚ">fhuwikigaz@gmail.com</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>FIRMA HANDLOWO-USŁUGOWA "FLOKS" PIOTR MUNIA</strong></td>
                                    <td data-label="Adres">ul. gen. Józefa Bema 13B, Krosno</td>
                                    <td data-label="Telefon">605 573 047</td>
                                    <td data-label="Email"><a href="mailto:biuro@autogaz-krosno.pl" aria-label="Wyślij email do FIRMA HANDLOWO-USŁUGOWA " FLOKS" PIOTR MUNIA">biuro@autogaz-krosno.pl</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Podlaskie -->
                    <section id="podlaskie" class="zaklady-section">
                        <h3>Podlaskie</h3>
                        <table class="zaklady-table" role="grid" aria-label="Lista zakładów montażowych w województwie podlaskim">
                            <thead>
                                <tr>
                                    <th scope="col">Nazwa Zakładu</th>
                                    <th scope="col">Adres</th>
                                    <th scope="col">Telefon</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>AUTO-GAZ JUNIOR KUKLIŃSKI MARIUSZ</strong></td>
                                    <td data-label="Adres">ul. Przemysłowa 42, Grajewo</td>
                                    <td data-label="Telefon">509 136 825</td>
                                    <td data-label="Email"><a href="mailto:autogazjunior@onet.pl" aria-label="Wyślij email do AUTO-GAZ JUNIOR KUKLIŃSKI MARIUSZ">autogazjunior@onet.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>SACAR J. CERNA, Z. CERNY SP. JAWNA</strong></td>
                                    <td data-label="Adres">AL. Jana Pawła II 51</td>
                                    <td data-label="Telefon"></td>
                                    <td data-label="Email"></td>
                                </tr>
                            </tbody>
                        </table>
                    </section>

                    <!-- Pomorskie -->
                    <section id="pomorskie" class="zaklady-section">
                        <h3>Pomorskie</h3>
                        <table class="zaklady-table" role="grid" aria-label="Lista zakładów montażowych w województwie pomorskim">
                            <thead>
                                <tr>
                                    <th scope="col">Nazwa Zakładu</th>
                                    <th scope="col">Adres</th>
                                    <th scope="col">Telefon</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>MAROL-GAZ MARCIN CZAPP</strong></td>
                                    <td data-label="Adres">ul. Glińskiego 16, Bolszewo</td>
                                    <td data-label="Telefon">606 398 137</td>
                                    <td data-label="Email"><a href="mailto:marol-gaz@wp.pl" aria-label="Wyślij email do MAROL-GAZ MARCIN CZAPP">marol-gaz@wp.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>AUTO-ATUT SP.C. W. ORŁOWSKI J. STEFANOWSKI</strong></td>
                                    <td data-label="Adres">ul. Gołębia 1, Gdynia</td>
                                    <td data-label="Telefon">58 6685777</td>
                                    <td data-label="Email"><a href="mailto:whorlowski@wp.pl" aria-label="Wyślij email do AUTO-ATUT SP.C. W. ORŁOWSKI J. STEFANOWSKI">whorlowski@wp.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>AUTO GAZ ELEKTRONIKA STANISŁAW BUCZAK</strong></td>
                                    <td data-label="Adres">ul. Do Studzienki 28, Gdańsk</td>
                                    <td data-label="Telefon">507 457 845</td>
                                    <td data-label="Email"><a href="mailto:autogazkts@gmail.com" aria-label="Wyślij email do AUTO GAZ ELEKTRONIKA STANISŁAW BUCZAK">autogazkts@gmail.com</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>AUTO-EKO BEATA GRABOWSKA KRZYSZTOF GRABOWSKI S.C.</strong></td>
                                    <td data-label="Adres">ul. Tucholska 7, Chojnice</td>
                                    <td data-label="Telefon">52 3971198</td>
                                    <td data-label="Email"><a href="mailto:b.k.grabowscy@wp.pl" aria-label="Wyślij email do AUTO-EKO BEATA GRABOWSKA KRZYSZTOF GRABOWSKI S.C.">b.k.grabowscy@wp.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>AUTO GAZ S-M SŁAWOMIR BARABASZ</strong></td>
                                    <td data-label="Adres">ul. Cementowa 16 A, Gdańsk</td>
                                    <td data-label="Telefon">58 3457028</td>
                                    <td data-label="Email"><a href="mailto:ppbarabasz@gmail.com" aria-label="Wyślij email do AUTO GAZ S-M SŁAWOMIR BARABASZ">ppbarabasz@gmail.com</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>4*4 AUTOGAZTECHNIK, JAROSŁAW ROSTOWSKI</strong></td>
                                    <td data-label="Adres">ul. Kielnieńska 183, Gdańsk</td>
                                    <td data-label="Telefon">607 555 333</td>
                                    <td data-label="Email"><a href="mailto:biuro@autogaztechnik.pl" aria-label="Wyślij email do 4*4 AUTOGAZTECHNIK, JAROSŁAW ROSTOWSKI">biuro@autogaztechnik.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>F. H. U. RAFGEL RAFAŁ GELECIŃSKI</strong></td>
                                    <td data-label="Adres">ul. Widzińska 23, Kobylnica</td>
                                    <td data-label="Telefon">602 644 337</td>
                                    <td data-label="Email"><a href="mailto:rafgel@wp.pl" aria-label="Wyślij email do F. H. U. RAFGEL RAFAŁ GELECIŃSKI">rafgel@wp.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>AUTO-LOCK ELEKTRO-MECHANIKA POJAZDOWA, T. JĘDRASZEK</strong></td>
                                    <td data-label="Adres">ul. Wojska Polskiego 498, Malbork</td>
                                    <td data-label="Telefon">692 858 803</td>
                                    <td data-label="Email"><a href="mailto:auto_lock@o2.pl" aria-label="Wyślij email do AUTO-LOCK ELEKTRO-MECHANIKA POJAZDOWA, T. JĘDRASZEK">auto_lock@o2.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>COALA BOGDAN KAŁEDKOWSKI</strong></td>
                                    <td data-label="Adres">ul. Grunwaldzka 60</td>
                                    <td data-label="Telefon">601-611-410</td>
                                    <td data-label="Email"><a href="mailto:coala1155@wp.pl" aria-label="Wyślij email do COALA BOGDAN KAŁEDKOWSKI">coala1155@wp.pl</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </section>

                    <!-- Śląskie -->
                    <section id="slaskie" class="zaklady-section">
                        <h3>Śląskie</h3>
                        <table class="zaklady-table" role="grid" aria-label="Lista zakładów montażowych w województwie śląskim">
                            <thead>
                                <tr>
                                    <th scope="col">Nazwa Zakładu</th>
                                    <th scope="col">Adres</th>
                                    <th scope="col">Telefon</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>CZAKRAM SP. Z O.O.</strong></td>
                                    <td data-label="Adres">ul. Rzemieślnicza 18, Mysłowice</td>
                                    <td data-label="Telefon">32 2221587</td>
                                    <td data-label="Email"><a href="mailto:smyslowice@czakram.pl" aria-label="Wyślij email do CZAKRAM SP. Z O.O.">smyslowice@czakram.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>KKL BURCON LESZEK</strong></td>
                                    <td data-label="Adres">ul. Gen. J. Hallera 20 C, Katowice</td>
                                    <td data-label="Telefon">855 349 648</td>
                                    <td data-label="Email"><a href="mailto:warsztat@kkl.pl" aria-label="Wyślij email do KKL BURCON LESZEK">warsztat@kkl.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>ROMAN ELIASZ PRZEDSIĘBIORSTWO WIELOBRANŻOWE ELIASZ</strong></td>
                                    <td data-label="Adres">Nowa Gorzelnia 107 A, Blachownia</td>
                                    <td data-label="Telefon">602 406 150</td>
                                    <td data-label="Email"><a href="mailto:lukasz.eliasz@gmail.com" aria-label="Wyślij email do ROMAN ELIASZ PRZEDSIĘBIORSTWO WIELOBRANŻOWE ELIASZ">lukasz.eliasz@gmail.com</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>FIRMA USŁUGOWO-HANDLOWA LW AUTO LESZEK WITKOWSKI</strong></td>
                                    <td data-label="Adres">ul. Dworkowa 1 b, Cieszyn</td>
                                    <td data-label="Telefon">509 464 584</td>
                                    <td data-label="Email"><a href="mailto:leszekv40@gmail.com" aria-label="Wyślij email do FIRMA USŁUGOWO-HANDLOWA LW AUTO LESZEK WITKOWSKI">leszekv40@gmail.com</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>F.H.U. MIX-1 ADAM PSZENNIAK</strong></td>
                                    <td data-label="Adres">ul. Kręta 5 A, Gogołowa</td>
                                    <td data-label="Telefon">606 685 415</td>
                                    <td data-label="Email"><a href="mailto:adamvictor@wp.pl" aria-label="Wyślij email do F.H.U. MIX-1 ADAM PSZENNIAK">adamvictor@wp.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>RAMAREX - I, BRZOZA ZBIGNIEW</strong></td>
                                    <td data-label="Adres">ul. Rudzka 102, Rybnik</td>
                                    <td data-label="Telefon">32 4222341</td>
                                    <td data-label="Email"><a href="mailto:ramarex@home.pl" aria-label="Wyślij email do RAMAREX - I, BRZOZA ZBIGNIEW">ramarex@home.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>MECHANIKA POJAZDOWA HANDEL USŁUGI, TOMASZ GARBACZ</strong></td>
                                    <td data-label="Adres">Siemianice ul. Poznańska 27, Oborniki Śląskie</td>
                                    <td data-label="Telefon">508 319 228</td>
                                    <td data-label="Email"><a href="mailto:tomaszgarbacz@vp.pl" aria-label="Wyślij email do MECHANIKA POJAZDOWA HANDEL USŁUGI, TOMASZ GARBACZ">tomaszgarbacz@vp.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>PRZEDSIĘBIORSTWO WIELOBRANŻOWE DAVANTI, RADOSŁAW MAZUR</strong></td>
                                    <td data-label="Adres">ul. Gombrowicza 95, Bytom</td>
                                    <td data-label="Telefon">503 528 791</td>
                                    <td data-label="Email"><a href="mailto:biuro@davanti.com.pl" aria-label="Wyślij email do PRZEDSIĘBIORSTWO WIELOBRANŻOWE DAVANTI, RADOSŁAW MAZUR">biuro@davanti.com.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>P.P.H.U LUNA EXPORT-IMPORT</strong></td>
                                    <td data-label="Adres">ul. Leśna 8, Pleszew</td>
                                    <td data-label="Telefon">510 117 494</td>
                                    <td data-label="Email"><a href="mailto:cys1@o2.pl" aria-label="Wyślij email do P.P.H.U LUNA EXPORT-IMPORT">cys1@o2.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>P.H.U. AUTO-GAZ - SŁAWOMIR RUTA</strong></td>
                                    <td data-label="Adres">Pleszówka 30, Gołuchów</td>
                                    <td data-label="Telefon"></td>
                                    <td data-label="Email"></td>
                                </tr>
                            </tbody>
                        </table>
                    </section>

                    <!-- Wielkopolskie -->
                    <section id="wielkopolskie" class="zaklady-section">
                        <h3>Wielkopolskie</h3>
                        <table class="zaklady-table" role="grid" aria-label="Lista zakładów montażowych w województwie wielkopolskim">
                            <thead>
                                <tr>
                                    <th scope="col">Nazwa Zakładu</th>
                                    <th scope="col">Adres</th>
                                    <th scope="col">Telefon</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>PHU RODAN ROMUALD STYCHAŃSKI</strong></td>
                                    <td data-label="Adres">ul. Tymienieckiego 65, Poznań</td>
                                    <td data-label="Telefon">606 403 875</td>
                                    <td data-label="Email"><a href="mailto:biuro@auto-gaz.net.pl" aria-label="Wyślij email do PHU RODAN ROMUALD STYCHAŃSKI">biuro@auto-gaz.net.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>ARCADE GROUP ŁUKASZ WAŁĘSA</strong></td>
                                    <td data-label="Adres">ul. Przemysłowa 110, Konin</td>
                                    <td data-label="Telefon">531 111 222</td>
                                    <td data-label="Email"><a href="mailto:konin@ekogas.pl" aria-label="Wyślij email do ARCADE GROUP ŁUKASZ WAŁĘSA">konin@ekogas.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>AUTOPORT/AUTOGAZ WOJCIECH NOWICKI</strong></td>
                                    <td data-label="Adres">Zalasewo, ul. Kórnicka 148, Swarzędz</td>
                                    <td data-label="Telefon">602 869 344</td>
                                    <td data-label="Email"><a href="mailto:autogazswarzedz@wp.pl" aria-label="Wyślij email do AUTOPORT/AUTOGAZ WOJCIECH NOWICKI">autogazswarzedz@wp.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>INSTAL AUTO-GAZ, NEWSMOKE ARTUR RAJZNER</strong></td>
                                    <td data-label="Adres">ul. Czarnkowska 26, Poznań</td>
                                    <td data-label="Telefon">609 801 801</td>
                                    <td data-label="Email"><a href="mailto:poznan1@instal-gaz.com.pl" aria-label="Wyślij email do INSTAL AUTO-GAZ, NEWSMOKE ARTUR RAJZNER">poznan1@instal-gaz.com.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>P.P.H.U LUNA EXPORT-IMPORT</strong></td>
                                    <td data-label="Adres">ul. Leśna 8, Pleszew</td>
                                    <td data-label="Telefon">510 117 494</td>
                                    <td data-label="Email"><a href="mailto:cys1@o2.pl" aria-label="Wyślij email do P.P.H.U LUNA EXPORT-IMPORT">cys1@o2.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>P.H.U. AUTO-GAZ - SŁAWOMIR RUTA</strong></td>
                                    <td data-label="Adres">Pleszówka 30, Gołuchów</td>
                                    <td data-label="Telefon"></td>
                                    <td data-label="Email"></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>LE-GAZ</strong></td>
                                    <td data-label="Adres">ul. Wypoczynkowa 7, Piła</td>
                                    <td data-label="Telefon">603 166 421</td>
                                    <td data-label="Email"><a href="mailto:legaz@vp.pl" aria-label="Wyślij email do LE-GAZ">legaz@vp.pl</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </section>

                    <!-- Zachodniopomorskie -->
                    <section id="zachodniopomorskie" class="zaklady-section">
                        <h3>Zachodniopomorskie</h3>
                        <table class="zaklady-table" role="grid" aria-label="Lista zakładów montażowych w województwie zachodniopomorskim">
                            <thead>
                                <tr>
                                    <th scope="col">Nazwa Zakładu</th>
                                    <th scope="col">Adres</th>
                                    <th scope="col">Telefon</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>AUTO NAPRAWA, JAROSŁAW GIZIŃSKI</strong></td>
                                    <td data-label="Adres">ul. Połczyńska 73, Koszalin</td>
                                    <td data-label="Telefon">94 3425950</td>
                                    <td data-label="Email"><a href="mailto:auto-gaz@info.netius.pl" aria-label="Wyślij email do AUTO NAPRAWA, JAROSŁAW GIZIŃSKI">auto-gaz@info.netius.pl</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>ADAMMAPOL ADAM MATERKA</strong></td>
                                    <td data-label="Adres">ul. Gdańska 7, Szczecin</td>
                                    <td data-label="Telefon">503 709 670</td>
                                    <td data-label="Email"><a href="mailto:adammaterka@gmail.com" aria-label="Wyślij email do ADAMMAPOL ADAM MATERKA">adammaterka@gmail.com</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Nazwa Zakładu"><strong>GAZ-AUTO SERWIS DOMINIK STEFANIAK</strong></td>
                                    <td data-label="Adres">ul. Krzysztofa Kolumba 45, Szczecin</td>
                                    <td data-label="Telefon">731 055 967</td>
                                    <td data-label="Email"><a href="mailto:gaz-autoserwis@wp.pl" aria-label="Wyślij email do GAZ-AUTO SERWIS DOMINIK STEFANIAK">gaz-autoserwis@wp.pl</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h4>CZAKRAM SP. Z O.O.</h4>
                    <p>ul. Dojazd 1<br>
                        33-100, Tarnów<br>
                        Polska</p>
                </div>
                <div class="footer-column">
                    <h4>Kontakt</h4>
                    <p>Email: maestro@czakram.pl<br>
                        Tel: +48 14 646 00 90</p>
                </div>
                <div class="footer-column">
                    <h4>Śledź nas</h4>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/BRCPolska/"><img src="images/facebook.png" alt="Facebook"></a>
                        <a href="https://www.instagram.com/brcpolska/"><img src="images/instagram.png" alt="instagram"></a>
                        <a href="https://www.youtube.com/@CzakramBoschCarService"><img src="images/youtube.png" alt="YouTube"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2025 BRC Maestro. Wszelkie prawa zastrzeżone.</p>
        </div>
    </footer>

    <button class="back-to-top" aria-label="Powrót do listy województw">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.province-button');
            const sections = document.querySelectorAll('.zaklady-section');
            const backToTopButton = document.querySelector('.back-to-top');
            const provinceButtonsSection = document.querySelector('.province-buttons');

            // Obsługa przycisku "Powrót do listy województw"
            backToTopButton.addEventListener('click', function() {
                if (provinceButtonsSection) {
                    provinceButtonsSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });

            // Obsługa przycisków województw
            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    const province = this.getAttribute('data-province');
                    const targetSection = document.getElementById(province);

                    if (targetSection) {
                        // Usuń klasę active ze wszystkich przycisków
                        buttons.forEach(btn => btn.classList.remove('active'));
                        // Dodaj klasę active do klikniętego przycisku
                        this.classList.add('active');

                        // Płynne przewijanie do sekcji
                        targetSection.scrollIntoView({
                            behavior: 'smooth'
                        });

                        // Dodaj klasę highlighted do sekcji
                        sections.forEach(section => section.classList.remove('highlighted'));
                        targetSection.classList.add('highlighted');

                        // Usuń klasę highlighted po 2 sekundach
                        setTimeout(() => {
                            targetSection.classList.remove('highlighted');
                        }, 2000);
                    }
                });
            });
        });
    </script>
</body>

</html>