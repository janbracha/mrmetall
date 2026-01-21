<?php
// Konfigurace webu MR METALL

// Základní informace o firmě
define('SITE_NAME', 'MR METALL s.r.o.');
define('SITE_TAGLINE', 'Kompetence – Všestrannost – Spolehlivost');
define('SITE_DESCRIPTION', 'Kovovýroba a zámečnictví. Kvalitní zpracování oceli, hliníku a nerezové oceli. Individuální řešení pro Dolní Rakousko, Horní Rakousko, Vídeň a Českou republiku.');
define('SITE_URL', 'https://www.mr-metall.cz');

// Kontaktní informace
define('COMPANY_NAME', 'MR METALL s.r.o.');
define('COMPANY_OWNER', 'Miloš Macháček');
define('COMPANY_POSITION', 'Jednatel firmy');
define('COMPANY_ADDRESS', 'Hlinsko 36');
define('COMPANY_CITY', 'České Budějovice');
define('COMPANY_ZIP', '370 01');
define('COMPANY_PHONE', '+420 607 606 547');
define('COMPANY_PHONE_DISPLAY', '+420 607 606 547');
define('COMPANY_EMAIL', 'machacek.milda@seznam.cz');

// Otevírací doba
define('OPENING_HOURS', [
    'Pondělí až čtvrtek' => '07:00 – 17:00',
    'Pátek' => '07:00 – 12:00',
    'Sobota' => 'Po domluvě'
]);

// SEO nastavení
define('KEYWORDS', 'kovovýroba, zámečnictví, ocel, hliník, nerez, České Budějovice, Rakousko, Vídeň');

// Navigační menu
define('MENU_ITEMS', [
    'home' => ['url' => '/index.php', 'title' => 'Domů', 'label' => 'Domů'],
    'planovani' => ['url' => '/planovani.php', 'title' => 'Plánování projektů', 'label' => 'Plánování'],
    'vyroba' => ['url' => '/vyroba.php', 'title' => 'Výroba kovových konstrukcí', 'label' => 'Výroba'],
    'instalace' => ['url' => '/instalace.php', 'title' => 'Instalace a montáž', 'label' => 'Instalace'],
    'opravy' => ['url' => '/opravy.php', 'title' => 'Opravy a rekonstrukce', 'label' => 'Opravy'],
    'kontakt' => ['url' => '/kontakt.php', 'title' => 'Kontaktujte nás', 'label' => 'Kontakt']
]);

// Časová zóna
date_default_timezone_set('Europe/Prague');

// Error reporting (pro produkci nastavit na 0)
error_reporting(E_ALL);
ini_set('display_errors', 1);
