<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/functions.php';
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="author" content="<?php echo COMPANY_NAME; ?>">
    
    <?php 
    // SEO meta tagy se nastavují na každé stránce individuálně
    if (isset($pageTitle)) {
        generateMetaTags($pageTitle, $pageDescription, $pageKeywords ?? '');
    }
    ?>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/images/favicon.png">
    
    <!-- CSS -->
    <link rel="stylesheet" href="/css/styles.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <?php generateStructuredData(); ?>
</head>
<body>
    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-contact">
                    <a href="tel:<?php echo str_replace(' ', '', COMPANY_PHONE); ?>" class="contact-item">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <?php echo COMPANY_PHONE_DISPLAY; ?>
                    </a>
                    <a href="mailto:<?php echo COMPANY_EMAIL; ?>" class="contact-item">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <?php echo COMPANY_EMAIL; ?>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="header-main">
            <div class="container">
                <nav class="navbar">
                    <div class="navbar-brand">
                        <a href="/" class="logo">
                            <span class="logo-text"><?php echo SITE_NAME; ?></span>
                            <span class="logo-tagline"><?php echo SITE_TAGLINE; ?></span>
                        </a>
                    </div>
                    
                    <button class="navbar-toggle" id="navbarToggle" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    
                    <ul class="navbar-menu" id="navbarMenu">
                        <?php foreach (MENU_ITEMS as $key => $item): ?>
                            <li class="menu-item">
                                <a href="<?php echo $item['url']; ?>" 
                                   class="menu-link <?php echo isActivePage($key); ?>"
                                   title="<?php echo $item['title']; ?>">
                                    <?php echo $item['label']; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    
    <main class="main-content">
