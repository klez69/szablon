<?php
require_once 'visitors.php';
logVisit();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRC Maestro - Galeria Montaży | Profesjonalne instalacje LPG i serwis autogaz</title>

    <!-- Meta tagi SEO -->
    <meta name="description" content="BRC Maestro - galeria naszych realizacji montażowych LPG. Zobacz przykłady profesjonalnych instalacji gazowych w samochodach. Warszawa, Kraków, Rzeszów, Lublin, Świdnica, Mysłowice.">
    <meta name="keywords" content="BRC Maestro, galeria, instalacje LPG, montaż LPG, systemy gazowe, oszczędzanie paliwa, instalacje gazowe, samochody na gaz, autogaz, brc gaz, brc instalacje, brc instalacja, brc lpg, brc serwis, lubin lpg, brc warszawa, serwis brc, brc rzeszów, brc kraków, brc mysłowice, auto gaz świdnica, instalacje brc opinie, brc czakram, instalacja lpg brc, eliasz gaz, brc lublin">
    <meta name="author" content="BRC Maestro">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://brc-maestro.pl/galeria.php">
    <meta property="og:title" content="BRC Maestro - Galeria Montaży | Profesjonalne instalacje LPG i serwis autogaz">
    <meta property="og:description" content="Zobacz nasze realizacje montażowe LPG. Profesjonalne instalacje gazowe w samochodach - BRC Maestro.">
    <meta property="og:image" content="https://brc-maestro.pl/images/mlogo.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://brc-maestro.pl/galeria.php">
    <meta property="twitter:title" content="BRC Maestro - Galeria Montaży | Profesjonalne instalacje LPG i serwis autogaz">
    <meta property="twitter:description" content="Zobacz nasze realizacje montażowe LPG. Profesjonalne instalacje gazowe w samochodach - BRC Maestro.">
    <meta property="twitter:image" content="https://brc-maestro.pl/images/mlogo.png">

    <!-- Favicon -->
    <link href="https://brc-maestro.pl/images/favico.ico" rel="icon" type="image/vnd.microsoft.icon">

    <!-- Style i skrypty -->
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
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
                    <li><a href="galeria.php" aria-current="page">Galeria Montaży</a></li>
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
        <section class="hero" aria-label="Galeria montaży">
            <div class="container">
                <div class="hero-content">
                    <h1>Galeria Montaży</h1>
                    <h2>PROFESJONALNE INSTALACJE LPG</h2>
                    <p class="hero-description">Zobacz nasze realizacje instalacji LPG dla różnych modeli samochodów</p>
                </div>
            </div>
        </section>

        <section class="gallery-section">
            <div class="gallery-container">
                <h2>Nasze realizacje</h2>
                <div class="gallery-grid">
                    <!-- Pierwszy rząd -->
                    <div class="gallery-item">
                        <div class="gallery-item-title">Toyota Sienna Hybrid AWD 2.5 (2020)</div>
                        <img src="images/2a.webp" alt="Instalacja LPG w Toyota Sienna Hybrid AWD 2.5 (2020) - montaż wykonany przez CZAKRAM TARNÓW">
                        <div class="gallery-item-description">Zamontowała firma: CZAKRAM TARNÓW</div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-item-title">Infinity Q60 3.0 V6 (2019)</div>
                        <img src="images/2b.webp" alt="Instalacja LPG w Infinity Q60 3.0 V6 (2019) - montaż wykonany przez CZAKRAM TARNÓW">
                        <div class="gallery-item-description">Zamontowała firma: CZAKRAM TARNÓW</div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-item-title">Audi A4 B8 2.0 TFSI (2018)</div>
                        <img src="images/2c.webp" alt="Instalacja LPG w Audi A4 B8 2.0 TFSI (2018) - montaż wykonany przez CZAKRAM TARNÓW">
                        <div class="gallery-item-description">Zamontowała firma: CZAKRAM TARNÓW</div>
                    </div>
                    <!-- Drugi rząd -->
                    <div class="gallery-item">
                        <div class="gallery-item-title">Jeep Renegade 1.3 GSE (2021)</div>
                        <img src="images/2d.webp" alt="Instalacja LPG w Jeep Renegade 1.3 GSE (2021) - montaż wykonany przez CZAKRAM TARNÓW">
                        <div class="gallery-item-description">Zamontowała firma: CZAKRAM TARNÓW</div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-item-title">Cadillac Escalade V8 6.2L EcoTec3 (2020)</div>
                        <img src="images/2e.webp" alt="Instalacja LPG w Cadillac Escalade V8 6.2L EcoTec3 (2020) - montaż wykonany przez AUTOLOCK MALBORK">
                        <div class="gallery-item-description">Zamontowała firma: AUTOLOCK MALBORK</div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-item-title">Audi SQ5 V6 TFSI 3.0 (2019)</div>
                        <img src="images/2f.webp" alt="Instalacja LPG w Audi SQ5 V6 TFSI 3.0 (2019) - montaż wykonany przez CZAKRAM TARNÓW">
                        <div class="gallery-item-description">Zamontowała firma: CZAKRAM TARNÓW</div>
                    </div>
                    <!-- trzeci rząd -->
                    <div class="gallery-item">
                        <div class="gallery-item-title">Porsche Macan 2.0 R4 (2020)</div>
                        <img src="images/2g.webp" alt="Instalacja LPG w Porsche Macan 2.0 R4 (2020) - montaż wykonany przez Solar Car - AutoGAZ Lublin">
                        <div class="gallery-item-description">Zamontowała firma: Solar Car - AutoGAZ Lublin</div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-item-title">Subaru Crosstrek 2.0 BOXER (2021)</div>
                        <img src="images/2h.webp" alt="Instalacja LPG w Subaru Crosstrek 2.0 BOXER (2021) - montaż wykonany przez TECH - CAR">
                        <div class="gallery-item-description">Zamontowała firma: TECH - CAR</div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-item-title">Mazda CX9II 2.5 R4 (2019)</div>
                        <img src="images/2i.webp" alt="Instalacja LPG w Mazda CX9II 2.5 R4 (2019) - montaż wykonany przez CZAKRAM RZESZÓW">
                        <div class="gallery-item-description">Zamontowała firma: CZAKRAM RZESZÓW</div>
                    </div>

                    <!-- Czwarty rząd -->
                    <div class="gallery-item">
                        <div class="gallery-item-title">Hyundai Ioniq 1.6L Hybrid (2020)</div>
                        <img src="images/2j.webp" alt="Instalacja LPG w Hyundai Ioniq 1.6L Hybrid (2020) - montaż wykonany przez CZAKRAM TARNÓW">
                        <div class="gallery-item-description">Zamontowała firma: CZAKRAM TARNÓW</div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-item-title">Toyota Yaris R3 1.5 (2021)</div>
                        <img src="images/2k.webp" alt="Instalacja LPG w Toyota Yaris R3 1.5 (2021) - montaż wykonany przez CZAKRAM TARNÓW">
                        <div class="gallery-item-description">Zamontowała firma: CZAKRAM TARNÓW</div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-item-title">Mazda CX5 2.5 194KM (2020)</div>
                        <img src="images/2l.webp" alt="Instalacja LPG w Mazda CX5 2.5 194KM (2020) - montaż wykonany przez CZAKRAM RZESZÓW">
                        <div class="gallery-item-description">Zamontowała firma: CZAKRAM RZESZÓW</div>
                    </div>

                    <!-- Piąty rząd -->
                    <div class="gallery-item">
                        <div class="gallery-item-title">Lincoln Navigator 3.5 V6 EcoBoost (2019)</div>
                        <img src="images/2m.webp" alt="Instalacja LPG w Lincoln Navigator 3.5 V6 EcoBoost (2019) - montaż wykonany przez CZAKRAM TARNÓW">
                        <div class="gallery-item-description">Zamontowała firma: CZAKRAM TARNÓW</div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-item-title">Volvo V60 T6 2.0 R4 (2020)</div>
                        <img src="images/2n.webp" alt="Instalacja LPG w Volvo V60 T6 2.0 R4 (2020) - montaż wykonany przez CZAKRAM TARNÓW">
                        <div class="gallery-item-description">Zamontowała firma: CZAKRAM TARNÓW</div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-item-title">VW Tiguan 2.0 TSI (2021)</div>
                        <img src="images/1000.webp" alt="Instalacja LPG w VW Tiguan 2.0 TSI (2021) - montaż wykonany przez ROMAN ELIASZ">
                        <div class="gallery-item-description">Zamontowała firma: ROMAN ELIASZ</div>
                    </div>
                    <!-- Szósty rząd -->
                    <div class="gallery-item">
                        <div class="gallery-item-title">Toyota Camry 2.5 153 kW (2020)</div>
                        <img src="images/000001.webp" alt="Instalacja LPG w Toyota Camry 2.5 153 kW (2020) - montaż wykonany przez AUTOGAZ Wojciech Nowicki">
                        <div class="gallery-item-description">Zamontowała firma: AUTOGAZ Wojciech Nowicki</div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-item-title">Volvo V60 T6 2.0 R4 (2019)</div>
                        <img src="images/000003.webp" alt="Instalacja LPG w Volvo V60 T6 2.0 R4 (2019) - montaż wykonany przez AUTOGAZ Wojciech Nowicki">
                        <div class="gallery-item-description">Zamontowała firma: AUTOGAZ Wojciech Nowicki</div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-item-title">Mazda CX5 2.5 (2021)</div>
                        <img src="images/000005.webp" alt="Instalacja LPG w Mazda CX5 2.5 (2021) - montaż wykonany przez COALA">
                        <div class="gallery-item-description">Zamontowała firma: COALA</div>
                    </div>
                    <!-- Siódmy rząd -->
                    <div class="gallery-item">
                        <div class="gallery-item-title">Skoda Octavia 1.8 TSI (2020)</div>
                        <img src="images/000008.webp" alt="Instalacja LPG w Skoda Octavia 1.8 TSI (2020) - montaż wykonany przez COALA">
                        <div class="gallery-item-description">Zamontowała firma: COALA</div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-item-title">Skoda Scala 1.0 TSI (2021)</div>
                        <img src="images/000009.webp" alt="Instalacja LPG w Skoda Scala 1.0 TSI (2021) - montaż wykonany przez PHU Rodan Romuald Stychański">
                        <div class="gallery-item-description">Zamontowała firma: PHU Rodan Romuald Stychański</div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-item-title">Ford Edge 2.7 V6 (2019)</div>
                        <img src="images/img_2805.jpg" alt="Instalacja LPG w Ford Edge 2.7 V6 (2019) - montaż wykonany przez CZAKRAM TARNÓW">
                        <div class="gallery-item-description">Zamontowała firma: CZAKRAM TARNÓW</div>
                    </div>
                    <!-- Ósmy rząd -->
                    <div class="gallery-item">
                        <div class="gallery-item-title">Kia Sportage 1.6 T-GDI (2020)</div>
                        <img src="images/img_2813.jpg" alt="Instalacja LPG w Kia Sportage 1.6 T-GDI (2020) - montaż wykonany przez CZAKRAM TARNÓW">
                        <div class="gallery-item-description">Zamontowała firma: CZAKRAM TARNÓW</div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-item-title">Ford Edge 2.0 EcoBoost (2021)</div>
                        <img src="images/000013.webp" alt="Instalacja LPG w Ford Edge 2.0 EcoBoost (2021) - montaż wykonany przez CZAKRAM TARNÓW">
                        <div class="gallery-item-description">Zamontowała firma: CZAKRAM TARNÓW</div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-item-title">Hyundai Kona 1.6 T-GDI (2020)</div>
                        <img src="images/000011.webp" alt="Instalacja LPG w Hyundai Kona 1.6 T-GDI (2020) - montaż wykonany przez CZAKRAM TARNÓW">
                        <div class="gallery-item-description">Zamontowała firma: CZAKRAM TARNÓW</div>
                    </div>
                    <!-- Dziewiąty rząd -->
                    <div class="gallery-item">
                        <div class="gallery-item-title">Ford F-150 3.5 EcoBoost (2018)</div>
                        <img src="images/000015.webp" alt="Instalacja LPG w Ford F-150 3.5 EcoBoost (2018) - montaż wykonany przez CZAKRAM TARNÓW">
                        <div class="gallery-item-description">Zamontowała firma: CZAKRAM TARNÓW</div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-item-title">Porsche Macan 2.0 TFSI (2020)</div>
                        <img src="images/000017.webp" alt="Instalacja LPG w Porsche Macan 2.0 TFSI (2020) - montaż wykonany przez CZAKRAM TARNÓW">
                        <div class="gallery-item-description">Zamontowała firma: CZAKRAM TARNÓW</div>
                    </div>


                </div>
            </div>
            </div>
        </section>
    </main>
    <!-- Stopka -->
    <?php include 'stopka.php'; ?>

    <!-- Modal do powiększania zdjęć -->
    <div class="modal" id="imageModal">
        <div class="modal-content">
            <span class="modal-close">&times;</span>
            <img src="" alt="Powiększone zdjęcie" id="modalImage">
            <div class="modal-description" id="modalDescription"></div>
        </div>
    </div>

    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
        }

        .modal.active {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            position: relative;
            max-width: 95%;
            max-height: 95%;
            text-align: center;
        }

        .modal-close {
            position: absolute;
            top: -40px;
            right: 0;
            color: white;
            font-size: 35px;
            font-weight: bold;
            cursor: pointer;
        }

        .modal img {
            max-width: 100%;
            max-height: 90vh;
            object-fit: contain;
            cursor: zoom-in;
        }

        .modal-description {
            color: white;
            font-size: 28px;
            margin-top: 25px;
            text-align: center;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            const modalDescription = document.getElementById('modalDescription');
            const closeBtn = document.querySelector('.modal-close');
            const galleryItems = document.querySelectorAll('.gallery-item');

            // Otwieranie modalu po kliknięciu w zdjęcie
            galleryItems.forEach(item => {
                item.addEventListener('click', function() {
                    const img = this.querySelector('img');
                    const title = this.querySelector('.gallery-item-title').textContent;
                    modalImg.src = img.src;
                    modalDescription.textContent = title;
                    modal.classList.add('active');
                });
            });

            // Zamykanie modalu po kliknięciu w przycisk zamykania
            closeBtn.addEventListener('click', function() {
                modal.classList.remove('active');
            });

            // Zamykanie modalu po kliknięciu poza zdjęciem
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.classList.remove('active');
                }
            });

            // Zamykanie modalu po naciśnięciu klawisza ESC
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && modal.classList.contains('active')) {
                    modal.classList.remove('active');
                }
            });
        });
    </script>
</body>

</html>