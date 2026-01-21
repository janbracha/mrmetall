<?php
$pageTitle = 'Opravy a rekonstrukce';
$pageDescription = 'Opravy a rekonstrukce kovových konstrukcí. Dostavby stávajících realizací. Práce s železem, ocelí, hliníkem i nerezem. MR METALL.';
$pageKeywords = 'opravy, rekonstrukce, dostavby, kovové konstrukce, renovace';

require_once __DIR__ . '/../includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <h1 class="page-title">Opravy a rekonstrukce</h1>
        <p class="page-subtitle">Renovace a dostavby stávajících konstrukcí</p>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="content-grid">
            <div class="content-main">
                <h2>Obnova a rekonstrukce kovových prvků</h2>
                <p>
                    Náš odborný tým provádí také opravy nebo dostavby již stávajících realizací z různých 
                    materiálů: železo, ocel, hliník i nerezový materiál. Specializujeme se na renovaci 
                    starších konstrukcí a jejich přizpůsobení moderním standardům.
                </p>
                
                <h3>Co opravujeme:</h3>
                <ul class="content-list">
                    <li>Kovové konstrukce všech typů</li>
                    <li>Zábradlí a ploty (včetně historických)</li>
                    <li>Brány, vrata a mříže</li>
                    <li>Schodiště a jejich části</li>
                    <li>Ocelové nosné konstrukce</li>
                    <li>Fasádní prvky a obklady</li>
                    <li>Balkóny a terasy</li>
                    <li>Průmyslové konstrukce</li>
                </ul>
                
                <h3>Typy prací, které provádíme:</h3>
                <div class="repair-types">
                    <div class="repair-card">
                        <h4>Renovace</h4>
                        <p>Kompletní obnova starších konstrukcí včetně čištění, oprav a nové povrchové úpravy</p>
                    </div>
                    <div class="repair-card">
                        <h4>Opravy</h4>
                        <p>Svařování prasklin, výměna poškozených částí, zpevnění konstrukcí</p>
                    </div>
                    <div class="repair-card">
                        <h4>Dostavby</h4>
                        <p>Rozšíření stávajících konstrukcí, přidání nových prvků</p>
                    </div>
                    <div class="repair-card">
                        <h4>Modernizace</h4>
                        <p>Úprava starších konstrukcí dle nových norem a požadavků</p>
                    </div>
                </div>
                
                <h3>Postup při rekonstrukci</h3>
                <div class="process-steps">
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <h4>Prohlídka</h4>
                        <p>Posouzení stavu konstrukce a rozsahu prací</p>
                    </div>
                    <div class="process-step">
                        <div class="step-number">2</div>
                        <h4>Návrh řešení</h4>
                        <p>Doporučení postupu a způsobu opravy</p>
                    </div>
                    <div class="process-step">
                        <div class="step-number">3</div>
                        <h4>Realizace</h4>
                        <p>Odborné provedení oprav a renovací</p>
                    </div>
                    <div class="process-step">
                        <div class="step-number">4</div>
                        <h4>Povrchová úprava</h4>
                        <p>Antikorozní ochrana a finální úpravy</p>
                    </div>
                </div>
                
                <h3>Práce s různými materiály</h3>
                <p>
                    Máme zkušenosti s opravami konstrukcí z různých materiálů a dokážeme pracovat 
                    s historickými i moderními prvky. Zajistíme, aby opravené konstrukce splňovaly 
                    současné bezpečnostní normy a byly dlouhodobě odolné.
                </p>
                
                <div class="info-box">
                    <h3>Antikorozní ochrana</h3>
                    <p>
                        Součástí všech oprav je kvalitní antikorozní ochrana, která prodlouží životnost 
                        konstrukce. Používáme moderní metody a certifikované nátěrové systémy.
                    </p>
                </div>
                
                <div class="cta-box">
                    <h3>Potřebujete opravit nebo renovovat?</h3>
                    <p>Kontaktujte nás pro nezávazné posouzení a cenovou nabídku</p>
                    <a href="/kontakt" class="btn btn-primary">Kontaktovat nás</a>
                </div>
            </div>
            
            <div class="content-sidebar">
                <div class="sidebar-widget">
                    <h3>Kontaktujte nás</h3>
                    <p>Rádi Vám poradíme s renovací</p>
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
                        <li><a href="/instalace">Instalace</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
