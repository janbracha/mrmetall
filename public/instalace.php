<?php
$pageTitle = 'Instalace';
$pageDescription = 'Profesionální instalace a montáž kovových konstrukcí. Odborní montážníci s dlouholetými zkušenostmi. MR METALL - České Budějovice.';
$pageKeywords = 'instalace, montáž, kovové konstrukce, odborná montáž';

require_once __DIR__ . '/../includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <h1 class="page-title">Instalace</h1>
        <p class="page-subtitle">Odborná montáž od zkušených profesionálů</p>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="content-grid">
            <div class="content-main">
                <h2>Profesionální instalace</h2>
                <p>
                    K instalaci zakázky využíváme odborné pracovníky, se kterými máte jistotu, že po 
                    dokončení nového díla nevzniknou žádné další nevyžádané práce. Naši montážníci 
                    disponují dlouholetými zkušenostmi a certifikáty pro práci ve výškách.
                </p>
                
                <h3>Co instalujeme:</h3>
                <ul class="content-list">
                    <li>Kovové konstrukce všech typů</li>
                    <li>Zábradlí a ploty</li>
                    <li>Brány a vrata</li>
                    <li>Schodiště a zámečnické výrobky</li>
                    <li>Ocelové rámy a nosné konstrukce</li>
                    <li>Fasádní prvky a obklady</li>
                    <li>Zakázkové kovové prvky</li>
                </ul>
                
                <h3>Průběh instalace</h3>
                <div class="process-steps">
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <h4>Příprava</h4>
                        <p>Příprava místa instalace a kontrola podmínek</p>
                    </div>
                    <div class="process-step">
                        <div class="step-number">2</div>
                        <h4>Doprava</h4>
                        <p>Bezpečná doprava materiálu na místo instalace</p>
                    </div>
                    <div class="process-step">
                        <div class="step-number">3</div>
                        <h4>Montáž</h4>
                        <p>Odborná instalace s důrazem na detail a kvalitu</p>
                    </div>
                    <div class="process-step">
                        <div class="step-number">4</div>
                        <h4>Kontrola</h4>
                        <p>Finální kontrola a předání díla zákazníkovi</p>
                    </div>
                </div>
                
                <h3>Naše výhody</h3>
                <div class="advantages-grid">
                    <div class="advantage-item">
                        <svg class="advantage-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <h4>Zkušení montážníci</h4>
                        <p>Tým profesionálů s dlouholetou praxí</p>
                    </div>
                    <div class="advantage-item">
                        <svg class="advantage-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <h4>Vlastní technika</h4>
                        <p>Disponujeme kompletním vybavením pro instalace</p>
                    </div>
                    <div class="advantage-item">
                        <svg class="advantage-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <h4>Bezpečnost práce</h4>
                        <p>Certifikáty a dodržování BOZP standardů</p>
                    </div>
                    <div class="advantage-item">
                        <svg class="advantage-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <h4>Záruka kvality</h4>
                        <p>Poskytujeme záruku na všechny naše práce</p>
                    </div>
                </div>
                
                <div class="info-box">
                    <h3>Pracujeme v celém regionu</h3>
                    <p>
                        Naše montážní týmy působí v České republice (především jižní Čechy) i v Rakousku 
                        (Dolní Rakousko, Horní Rakousko, Vídeň).
                    </p>
                </div>
                
                <div class="cta-box">
                    <h3>Potřebujete instalaci?</h3>
                    <p>Kontaktujte nás pro nezávaznou konzultaci a cenovou nabídku</p>
                    <a href="/kontakt" class="btn btn-primary">Kontaktovat nás</a>
                </div>
            </div>
            
            <div class="content-sidebar">
                <div class="sidebar-widget">
                    <h3>Kontaktujte nás</h3>
                    <p>Rádi Vám připravíme cenovou nabídku</p>
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
                        <li><a href="/planovani">Plánování</a></li>
                        <li><a href="/vyroba">Výroba</a></li>
                        <li><a href="/opravy">Opravy a rekonstrukce</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
