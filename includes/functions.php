<?php
// Pomocné funkce pro web MR METALL

/**
 * Získá aktuální stránku z URL
 */
function getCurrentPage() {
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    return basename($page);
}

/**
 * Generuje HTML meta tagy pro SEO
 */
function generateMetaTags($title, $description, $keywords = '') {
    $siteTitle = SITE_NAME . ' - ' . SITE_TAGLINE;
    $fullTitle = $title . ' | ' . $siteTitle;
    $defaultKeywords = KEYWORDS;
    
    if ($keywords) {
        $keywords = $keywords . ', ' . $defaultKeywords;
    } else {
        $keywords = $defaultKeywords;
    }
    
    echo '<title>' . htmlspecialchars($fullTitle) . '</title>' . "\n";
    echo '<meta name="description" content="' . htmlspecialchars($description) . '">' . "\n";
    echo '<meta name="keywords" content="' . htmlspecialchars($keywords) . '">' . "\n";
    
    // Open Graph tagy
    echo '<meta property="og:title" content="' . htmlspecialchars($fullTitle) . '">' . "\n";
    echo '<meta property="og:description" content="' . htmlspecialchars($description) . '">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:url" content="' . SITE_URL . $_SERVER['REQUEST_URI'] . '">' . "\n";
    echo '<meta property="og:site_name" content="' . SITE_NAME . '">' . "\n";
}

/**
 * Generuje JSON-LD strukturovaná data
 */
function generateStructuredData() {
    $structuredData = [
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => COMPANY_NAME,
        'description' => SITE_DESCRIPTION,
        'url' => SITE_URL,
        'telephone' => COMPANY_PHONE,
        'email' => COMPANY_EMAIL,
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => COMPANY_ADDRESS,
            'addressLocality' => COMPANY_CITY,
            'postalCode' => COMPANY_ZIP,
            'addressCountry' => 'CZ'
        ],
        'openingHoursSpecification' => [
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday'],
                'opens' => '07:00',
                'closes' => '17:00'
            ],
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => 'Friday',
                'opens' => '07:00',
                'closes' => '12:00'
            ]
        ],
        'priceRange' => '$$'
    ];
    
    echo '<script type="application/ld+json">' . "\n";
    echo json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    echo "\n" . '</script>' . "\n";
}

/**
 * Sanitizace vstupních dat
 */
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * Validace emailu
 */
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Generuje bezpečné URL
 */
function url($path = '') {
    $baseUrl = rtrim(SITE_URL, '/');
    $path = ltrim($path, '/');
    return $baseUrl . '/' . $path;
}

/**
 * Kontrola aktivní stránky v menu
 */
function isActivePage($page) {
    $current = getCurrentPage();
    return $current === $page ? 'active' : '';
}
