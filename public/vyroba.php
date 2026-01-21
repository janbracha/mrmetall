<?php
$pageTitle = 'Výroba';
$pageDescription = 'Moderní kovovýroba s odborně vyškolenými pracovníky. Kvalitní zpracování oceli, hliníku a nerezu. MR METALL - České Budějovice.';
$pageKeywords = 'výroba, kovovýroba, svařování, ocel, hliník, nerez, výrobní kapacity';

require_once __DIR__ . '/../includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <h1 class="page-title">Výroba</h1>
        <p class="page-subtitle">Moderní vybavení a zkušení pracovníci</p>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="content-grid">
            <div class="content-main">
                <h2>Kvalitní kovovýroba</h2>
                <p>
                    S moderním vybavením a odborně vyškolenými pracovníky předpřipravujeme jednotlivé 
                    projekty s naší partnerskou firmou v České Republice MR Metall. Disponujeme kompletním 
                    zázemím pro výrobu kovových konstrukcí všech typů.
                </p>
                
                <h3>Naše výrobní kapacity:</h3>
                <ul class="content-list">
                    <li>Zpracování různých typů materiálů (ocel, hliník, nerezová ocel)</li>
                    <li>Svařování metodou MIG/MAG, TIG a elektrodou</li>
                    <li>Řezání, ohýbání a tváření kovů</li>
                    <li>CNC obrábění pro přesné výrobky</li>
                    <li>Povrchová úprava a lakování</li>
                    <li>Sestavování a předmontáž konstrukcí</li>
                </ul>
                
                <h3>Materiály, se kterými pracujeme</h3>
                <div class="materials-grid">
                    <div class="material-card">
                        <h4>Ocel</h4>
                        <p>Konstrukční ocel všech typů pro náročné konstrukce a nosné prvky</p>
                    </div>
                    <div class="material-card">
                        <h4>Hliník</h4>
                        <p>Lehký a odolný materiál ideální pro moderní konstrukce</p>
                    </div>
                    <div class="material-card">
                        <h4>Nerezová ocel</h4>
                        <p>Korozivzdorný materiál pro exteriéry a náročná prostředí</p>
                    </div>
                </div>
                
                <h3>Co vyrábíme</h3>
                <ul class="content-list">
                    <li>Kovové konstrukce pro průmysl a stavebnictví</li>
                    <li>Zábradlí, ploty a brány</li>
                    <li>Schodiště a zámečnické prvky</li>
                    <li>Ocelové rámy a nosné konstrukce</li>
                    <li>Zakázkové produkty dle návrhu zákazníka</li>
                    <li>Náhradní díly a komponenty</li>
                </ul>
                
                <div class="quality-box">
                    <h3>Kvalita je naše priorita</h3>
                    <p>
                        Všechny naše výrobky procházejí přísnou kontrolou kvality. Používáme pouze 
                        certifikované materiály a dodržujeme všechny technické normy a standardy.
                    </p>
                </div>
                
                <div class="cta-box">
                    <h3>Potřebujete nechat něco vyrobit?</h3>
                    <p>Kontaktujte nás a probereme Vaše požadavky</p>
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
                        <li><a href="/instalace">Instalace</a></li>
                        <li><a href="/opravy">Opravy a rekonstrukce</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
