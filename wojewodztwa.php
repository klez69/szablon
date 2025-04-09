<?php
// Pobierz dane o liczbie zakładów w każdym województwie z bazy danych
$zaklady = array(); // Tu dodaj kod pobierający dane z bazy

// Wyświetl ścieżki SVG z dynamicznymi danymi
?>
<a href="#" data-toggle="tooltip" data-placement="top" title="Dolnośląskie - odwiedziny: <?php echo isset($zaklady['DS']) ? $zaklady['DS'] : '0'; ?>">
    <path d="m 52.276011,352.46195 2.36,0.07..." title="Dolnośląskie" id="PL-DS" class="mapsvg-region"></path>
</a>
<!-- Dodaj pozostałe województwa -->