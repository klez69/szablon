<?php
require_once 'visitors.php';
logVisit();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRC Maestro - Lista Pojazdów | Profesjonalne instalacje LPG i serwis autogaz</title>
    
    <!-- Meta tagi SEO -->
    <meta name="description" content="BRC Maestro - lista pojazdów kompatybilnych z naszymi instalacjami LPG. Sprawdź, czy Twój samochód może być wyposażony w system gazowy. Warszawa, Kraków, Rzeszów, Lublin, Świdnica, Mysłowice.">
    <meta name="keywords" content="BRC Maestro, lista pojazdów, instalacje LPG, montaż LPG, systemy gazowe, oszczędzanie paliwa, instalacje gazowe, samochody na gaz, autogaz, brc gaz, brc instalacje, brc instalacja, brc lpg, brc serwis, lubin lpg, brc warszawa, serwis brc, brc rzeszów, brc kraków, brc mysłowice, auto gaz świdnica, instalacje brc opinie, brc czakram, instalacja lpg brc, eliasz gaz, brc lublin">
    <meta name="author" content="BRC Maestro">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://brc-maestro.pl/lista.php">
    <meta property="og:title" content="BRC Maestro - Lista Pojazdów | Profesjonalne instalacje LPG i serwis autogaz">
    <meta property="og:description" content="Sprawdź listę pojazdów kompatybilnych z instalacjami LPG BRC Maestro. Profesjonalne usługi w całej Polsce.">
    <meta property="og:image" content="https://brc-maestro.pl/images/mlogo.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://brc-maestro.pl/lista.php">
    <meta property="twitter:title" content="BRC Maestro - Lista Pojazdów | Profesjonalne instalacje LPG i serwis autogaz">
    <meta property="twitter:description" content="Sprawdź listę pojazdów kompatybilnych z instalacjami LPG BRC Maestro. Profesjonalne usługi w całej Polsce.">
    <meta property="twitter:image" content="https://brc-maestro.pl/images/mlogo.png">

    <!-- Favicon -->
    <link href="https://brc-maestro.pl/images/favico.ico" rel="icon" type="image/vnd.microsoft.icon">
    
    <!-- Style i skrypty -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="data.js"></script>
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
                    <li><a href="lista.php" aria-current="page">Lista pojazdów</a></li>
                    <li><a href="o-nas.php">Piszą o nas</a></li>
                    <li><a href="https://brc-maestro.pl/formularz/formularz.html">Formularz</a></li>
                    <li><a href="kontakt.php">Kontakt</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero" aria-label="Lista pojazdów">
            <div class="container">
                <div class="hero-content">
                    <h1>Lista pojazdów</h1>
                    <h2>SPRAWDŹ SWÓJ POJAZD</h2>
                    <p class="hero-description">Sprawdź czy Twój pojazd jest na liście</p>
                </div>
            </div>
        </section>

        <section class="vehicle-selector-section">
            <div class="container">
                <div class="vehicle-selector">
                    <div class="selector-row">
                        <div class="selector-group">
                            <label for="brand">Marka</label>
                            <select id="brand" class="vehicle-select">
                                <option value="">Wybierz markę</option>
                            </select>
                        </div>
                        <div class="selector-group">
                            <label for="model">Model</label>
                            <select id="model" class="vehicle-select">
                                <option value="">Wybierz model</option>
                            </select>
                        </div>
                    </div>
                    <div class="vehicle-details" id="vehicle-details">
                        <div class="details-grid">
                            <div class="detail-item">
                                <h3>Szczegóły pojazdu:</h3>
                                <ul id="model-variants">
                                    <!-- Tu będą wyświetlane wszystkie warianty modelu -->
                                </ul>
                                <div class="form-button-container">
                                    <a href="https://brc-maestro.pl/formularz/formularz.html" class="form-button">
                                        <i class="fas fa-file-alt"></i>
                                        Przejdź do formularza
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services">
            <div class="container">
                <div class="pdf-container">
                    <iframe src="images/19_Lista_Sequent_Maestro_kli.pdf#page=1" type="application/pdf"></iframe>
                </div>
            </div>
        </section>
    </main>
<!-- Stopka -->
    <?php include 'stopka.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const brandSelect = document.getElementById('brand');
            const modelSelect = document.getElementById('model');
            const powerValue = document.getElementById('power-value');
            const capacityValue = document.getElementById('capacity-value');
            const yearValue = document.getElementById('year-value');
            const engineCodeValue = document.getElementById('engine-code-value');
            const modelsList = document.getElementById('models-list');
            const modelVariants = document.getElementById('model-variants');

            // Wypełnij listę marek
            Object.keys(vehicleData).forEach(brand => {
                const option = document.createElement('option');
                option.value = brand;
                option.textContent = brand;
                brandSelect.appendChild(option);
            });

            // Aktualizuj modele gdy zmienia się marka
            brandSelect.addEventListener('change', function() {
                const selectedBrand = this.value;
                modelSelect.innerHTML = '<option value="">Wybierz model</option>';
                
                if (selectedBrand) {
                    // Pobierz modele dla wybranej marki
                    const models = Object.keys(vehicleData[selectedBrand]);
                    
                    // Dodaj modele do listy rozwijanej
                    models.forEach(model => {
                        if (model !== 'default') { // Pomijamy wariant 'default'
                            const option = document.createElement('option');
                            option.value = model;
                            option.textContent = model;
                            modelSelect.appendChild(option);
                        }
                    });
                }
                
                updateVehicleDetails();
            });

            // Aktualizuj szczegóły gdy zmienia się model
            modelSelect.addEventListener('change', updateVehicleDetails);

            function updateVehicleDetails() {
                const brand = brandSelect.value;
                const model = modelSelect.value;
                
                if (brand && model) {
                    // Pobierz dane dla wybranego modelu
                    const modelData = vehicleData[brand][model];
                    
                    if (modelData) {
                        // Wyczyść poprzednie warianty
                        modelVariants.innerHTML = '';
                        
                        // Dodaj nagłówek z marką i modelem
                        const header = document.createElement('li');
                        header.innerHTML = `<strong>${brand} ${model}</strong>`;
                        header.className = 'model-header';
                        modelVariants.appendChild(header);
                        
                        // Dodaj wszystkie warianty modelu
                        if (modelData.variants && Array.isArray(modelData.variants)) {
                            modelData.variants.forEach(variant => {
                                const li = document.createElement('li');
                                li.innerHTML = `
                                    <div class="variant-details">
                                        <div class="variant-specs">
                                            <span>${variant.label}</span>
                                            <span>Moc: ${variant.moc} KM</span>
                                            <span>Pojemność: ${variant.pojemnosc} cm³</span>
                                            <span>Rok: ${variant.rok_produkcji}</span>
                                            <span>Kod: ${variant.kod_silnika}</span>
                                        </div>
                                    </div>
                                `;
                                modelVariants.appendChild(li);
                            });
                        }

                        // Pokaż sekcję szczegółów
                        document.getElementById('vehicle-details').style.display = 'block';
                    } else {
                        // Resetuj wartości jeśli nie znaleziono danych
                        modelVariants.innerHTML = '';
                        document.getElementById('vehicle-details').style.display = 'none';
                    }
                } else {
                    // Resetuj wartości jeśli nie wybrano marki lub modelu
                    modelVariants.innerHTML = '';
                    document.getElementById('vehicle-details').style.display = 'none';
                }
            }
        });
    </script>
</body>
</html>