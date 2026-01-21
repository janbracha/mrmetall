<?php
$pageTitle = 'Úvod';
$pageDescription = 'MR METALL s.r.o. - Kvalitní kovovýroba a zámečnictví. Individuální řešení z oceli, hliníku a nerezu pro České Budějovice, Rakousko a Vídeň.';
$pageKeywords = 'kovovýroba České Budějovice, zámečnictví, kovové konstrukce, ocel, hliník, nerez';

require_once __DIR__ . '/../includes/header.php';
?>

<section class="hero">
    <div class="hero-overlay"></div>
    <div class="container hero-container">
        <div class="hero-content">
            <h1 class="hero-title">
                <span class="hero-main"><?php echo SITE_NAME; ?></span>
                <span class="hero-subtitle">Kovovýroba a Zámečnictví</span>
            </h1>
            <p class="hero-tagline"><?php echo SITE_TAGLINE; ?></p>
            <p class="hero-description">
                Máte nápad a hledáte zkušené profesionály, kteří Vám myšlenku dle Vašeho přání zrealizují? 
                Jste u nás zcela správně. Nabízíme individuální řešení z různých materiálů jako je ocel, 
                hliník nebo nerezový sortiment ve vynikající kvalitě za férové ceny.
            </p>
            <div class="hero-cta">
                <a href="/kontakt" class="btn btn-primary">Kontaktujte nás</a>
                <a href="/planovani" class="btn btn-secondary">Naše služby</a>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <h2 class="section-title">Naše služby</h2>
        <p class="section-subtitle">Komplexní řešení od plánování po finální instalaci</p>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="12" y1="18" x2="12" y2="12"></line>
                        <line x1="9" y1="15" x2="15" y2="15"></line>
                    </svg>
                </div>
                <h3 class="service-title">Plánování</h3>
                <p class="service-description">
                    Rádi Vám poradíme s postupy a možnostmi, které jsou pro Vaše plány nutné. 
                    Přizpůsobíme naši práci individuálně Vašim potřebám.
                </p>
                <a href="/planovani" class="service-link">Dozvědět se více →</a>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="9" y1="9" x2="15" y2="9"></line>
                        <line x1="9" y1="15" x2="15" y2="15"></line>
                    </svg>
                </div>
                <h3 class="service-title">Výroba</h3>
                <p class="service-description">
                    S moderním vybavením a odborně vyškolenými pracovníky předpřipravujeme 
                    jednotlivé projekty s naší partnerskou firmou v České Republice.
                </p>
                <a href="/vyroba" class="service-link">Dozvědět se více →</a>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                    </svg>
                </div>
                <h3 class="service-title">Instalace</h3>
                <p class="service-description">
                    K instalaci zakázky využíváme odborné pracovníky, se kterými máte jistotu, 
                    že po dokončení nového díla nevzniknou žádné další nevyžádané práce.
                </p>
                <a href="/instalace" class="service-link">Dozvědět se více →</a>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                </div>
                <h3 class="service-title">Opravy a rekonstrukce</h3>
                <p class="service-description">
                    Náš odborný tým provádí také opravy nebo dostavby již stávajících realizací 
                    z různých materiálů: železo, ocel, hliník i nerezový materiál.
                </p>
                <a href="/opravy" class="service-link">Dozvědět se více →</a>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="about-grid">
            <div class="about-content">
                <h2 class="section-title">O naší firmě</h2>
                <p>
                    <strong><?php echo COMPANY_NAME; ?></strong> nabízí individuální řešení zcela dle Vašeho přání, 
                    z různých materiálů jako je třeba ocel, hliník nebo nerezový sortiment ve vynikající kvalitě 
                    za férové ceny.
                </p>
                <p>
                    Seznamte se na našich webových stránkách s aktivitami, které v oblasti Dolního Rakouska, 
                    Horního Rakouska, Vídně a České republiky nabízíme.
                </p>
                <div class="about-features">
                    <div class="feature">
                        <svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <span>Odborné poradenství</span>
                    </div>
                    <div class="feature">
                        <svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <span>Kvalitní materiály</span>
                    </div>
                    <div class="feature">
                        <svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <span>Férové ceny</span>
                    </div>
                    <div class="feature">
                        <svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <span>Individuální přístup</span>
                    </div>
                </div>
            </div>
            
            <div class="about-image">
                <div class="about-image-placeholder">
                    <!-- Zde bude obrázek -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Rádi si na Vás uděláme čas ke konzultaci Vašeho projektu</h2>
            <p class="cta-text">
                Využijte jednoduchý způsob kontaktu k zodpovězení Vašich otázek a prověření možností naší firmou.
            </p>
            <div class="cta-buttons">
                <a href="/kontakt" class="btn btn-primary btn-large">Kontaktní formulář</a>
                <a href="tel:<?php echo str_replace(' ', '', COMPANY_PHONE); ?>" class="btn btn-secondary btn-large">
                    Zavolejte nám
                </a>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
