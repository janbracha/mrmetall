<?php
$pageTitle = 'Kontakt';
$pageDescription = 'Kontaktujte MR METALL s.r.o. - kovovýroba a zámečnictví. Hlinsko 36, České Budějovice. Tel: +420 607 606 547';
$pageKeywords = 'kontakt, České Budějovice, adresa, telefon, email, otevírací doba';

require_once __DIR__ . '/../includes/header.php';

// Zpracování formuláře
$formSent = false;
$formError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = sanitizeInput($_POST['name'] ?? '');
    $email = sanitizeInput($_POST['email'] ?? '');
    $phone = sanitizeInput($_POST['phone'] ?? '');
    $subject = sanitizeInput($_POST['subject'] ?? '');
    $message = sanitizeInput($_POST['message'] ?? '');
    
    // Validace
    if (empty($name) || empty($email) || empty($message)) {
        $formError = 'Vyplňte prosím všechna povinná pole.';
    } elseif (!validateEmail($email)) {
        $formError = 'Zadejte prosím platnou emailovou adresu.';
    } else {
        // Příprava emailu
        $to = COMPANY_EMAIL;
        $emailSubject = 'Dotaz z webu: ' . $subject;
        $emailBody = "Nový dotaz z webu www.mr-metall.cz\n\n";
        $emailBody .= "Jméno: $name\n";
        $emailBody .= "Email: $email\n";
        $emailBody .= "Telefon: $phone\n";
        $emailBody .= "Předmět: $subject\n\n";
        $emailBody .= "Zpráva:\n$message\n";
        
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        // Odeslání emailu
        if (mail($to, $emailSubject, $emailBody, $headers)) {
            $formSent = true;
        } else {
            $formError = 'Omlouváme se, ale nepodařilo se odeslat zprávu. Zkuste to prosím znovu nebo nás kontaktujte telefonicky.';
        }
    }
}
?>

<section class="page-header">
    <div class="container">
        <h1 class="page-title">Kontakt</h1>
        <p class="page-subtitle">Těšíme se na Vaši zprávu</p>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info">
                <h2>Kontaktní údaje</h2>
                
                <div class="contact-card">
                    <h3>
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        Adresa
                    </h3>
                    <p>
                        <strong><?php echo COMPANY_NAME; ?></strong><br>
                        <?php echo COMPANY_ADDRESS; ?><br>
                        <?php echo COMPANY_ZIP; ?> <?php echo COMPANY_CITY; ?>
                    </p>
                </div>
                
                <div class="contact-card">
                    <h3>
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        Telefon
                    </h3>
                    <p>
                        <a href="tel:<?php echo str_replace(' ', '', COMPANY_PHONE); ?>" class="contact-link">
                            <?php echo COMPANY_PHONE_DISPLAY; ?>
                        </a>
                    </p>
                </div>
                
                <div class="contact-card">
                    <h3>
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        Email
                    </h3>
                    <p>
                        <a href="mailto:<?php echo COMPANY_EMAIL; ?>" class="contact-link">
                            <?php echo COMPANY_EMAIL; ?>
                        </a>
                    </p>
                </div>
                
                <div class="contact-card">
                    <h3>
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        Otevírací doba
                    </h3>
                    <ul class="opening-hours-list">
                        <?php foreach (OPENING_HOURS as $day => $hours): ?>
                            <li><?php echo $day; ?>: <strong><?php echo $hours; ?></strong></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <div class="contact-card">
                    <h3>Jednatel firmy</h3>
                    <p>
                        <strong><?php echo COMPANY_OWNER; ?></strong><br>
                        <?php echo COMPANY_POSITION; ?>
                    </p>
                </div>
            </div>
            
            <div class="contact-form-wrapper">
                <h2>Napište nám</h2>
                
                <?php if ($formSent): ?>
                    <div class="alert alert-success">
                        <svg class="alert-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <p><strong>Děkujeme za Vaši zprávu!</strong><br>
                        Brzy se Vám ozveme.</p>
                    </div>
                <?php endif; ?>
                
                <?php if ($formError): ?>
                    <div class="alert alert-error">
                        <svg class="alert-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="15" y1="9" x2="9" y2="15"></line>
                            <line x1="9" y1="9" x2="15" y2="15"></line>
                        </svg>
                        <p><?php echo $formError; ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if (!$formSent): ?>
                    <form method="POST" action="" class="contact-form">
                        <div class="form-group">
                            <label for="name">Jméno a příjmení *</label>
                            <input type="text" id="name" name="name" required 
                                   value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>">
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" id="email" name="email" required 
                                       value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="phone">Telefon</label>
                                <input type="tel" id="phone" name="phone" 
                                       value="<?php echo isset($phone) ? htmlspecialchars($phone) : ''; ?>">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Předmět</label>
                            <input type="text" id="subject" name="subject" 
                                   value="<?php echo isset($subject) ? htmlspecialchars($subject) : ''; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Zpráva *</label>
                            <textarea id="message" name="message" rows="6" required><?php echo isset($message) ? htmlspecialchars($message) : ''; ?></textarea>
                        </div>
                        
                        <p class="form-note">* Povinná pole</p>
                        
                        <button type="submit" class="btn btn-primary btn-large">Odeslat zprávu</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="map-section">
    <div class="container">
        <h2 class="section-title">Kde nás najdete</h2>
        <div class="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2621.2!2d14.474!3d48.974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDjCsDU4JzI2LjQiTiAxNMKwMjgnMjYuNCJF!5e0!3m2!1scs!2scz!4v1234567890" 
                    width="100%" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <p class="map-note">
            Působíme v České republice (především jižní Čechy) i v Rakousku (Dolní Rakousko, Horní Rakousko, Vídeň)
        </p>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
