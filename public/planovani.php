<?php
$pageTitle = 'Plánování';
$pageDescription = 'Odborné poradenství a plánování kovových konstrukcí. Individuální přístup k Vašim projektům. MR METALL - České Budějovice.';
$pageKeywords = 'plánování, poradenství, projekt, kovové konstrukce, návrh';

require_once __DIR__ . '/../includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <h1 class="page-title">Plánování</h1>
        <p class="page-subtitle">Odborné poradenství pro Váš projekt</p>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="content-grid">
            <div class="content-main">
                <h2>Individuální řešení na míru</h2>
                <p>
                    Rádi Vám poradíme s postupy a možnostmi, které jsou pro Vaše plány nutné. 
                    Přizpůsobíme naši práci individuálně Vašim potřebám. Vždy nabídneme kvalitní 
                    a vysoce odborné řešení.
                </p>
                
                <h3>Naše služby zahrnují:</h3>
                <ul class="content-list">
                    <li>Konzultace a poradenství v oblasti kovovýroby</li>
                    <li>Návrh optimálního řešení dle Vašich požadavků</li>
                    <li>Výběr vhodných materiálů (ocel, hliník, nerez)</li>
                    <li>Kalkulace nákladů a časová náročnost projektu</li>
                    <li>Technické řešení a dokumentace</li>
                    <li>Koordinace jednotlivých fází projektu</li>
                </ul>
                
                <h3>Proces plánování</h3>
                <div class="process-steps">
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <h4>Konzultace</h4>
                        <p>Společně prodiskutujeme Vaše představy a požadavky</p>
                    </div>
                    <div class="process-step">
                        <div class="step-number">2</div>
                        <h4>Návrh řešení</h4>
                        <p>Vypracujeme technický návrh včetně výběru materiálů</p>
                    </div>
                    <div class="process-step">
                        <div class="step-number">3</div>
                        <h4>Kalkulace</h4>
                        <p>Předložíme detailní cenovou nabídku a časový harmonogram</p>
                    </div>
                    <div class="process-step">
                        <div class="step-number">4</div>
                        <h4>Realizace</h4>
                        <p>Po schválení přejdeme k výrobě a instalaci</p>
                    </div>
                </div>
                
                <div class="cta-box">
                    <h3>Máte projekt, který chcete zrealizovat?</h3>
                    <p>Kontaktujte nás pro nezávaznou konzultaci</p>
                    <a href="/kontakt" class="btn btn-primary">Kontaktovat nás</a>
                </div>
            </div>
            
            <div class="content-sidebar">
                <div class="sidebar-widget">
                    <h3>Kontaktujte nás</h3>
                    <p>Rádi si s Vámi probereme Váš projekt</p>
                    <ul class="contact-list">
                        <li>
                            <strong>Telefon:</strong><br>
                            <a href="tel:<?php echo str_replace(' ', '', COMPANY_PHONE); ?>">
                                <?php echo COMPANY_PHONE_DISPLAY; ?>
                            </a>
                        </li>
                        <li>
                            <strong>Email:</strong><br>
                            <a href="mailto:<?php echo COMPANY_EMAIL; ?>">
                                <?php echo COMPANY_EMAIL; ?>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="sidebar-widget">
                    <h3>Další služby</h3>
                    <ul class="services-list">
                        <li><a href="/vyroba">Výroba</a></li>
                        <li><a href="/instalace">Instalace</a></li>
                        <li><a href="/opravy">Opravy a rekonstrukce</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
