<?php
$pageTitle = 'Stránka nenalezena';
$pageDescription = '404 - Stránka nenalezena';

require_once __DIR__ . '/../includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <h1 class="page-title">404</h1>
        <p class="page-subtitle">Stránka nebyla nalezena</p>
    </div>
</section>

<section class="content-section">
    <div class="container" style="text-align: center; padding: 60px 0;">
        <h2>Omlouváme se, ale tato stránka neexistuje</h2>
        <p style="margin: 30px 0;">Stránka, kterou hledáte, byla možná přesunuta nebo odstraněna.</p>
        <a href="/" class="btn btn-primary">Zpět na domovskou stránku</a>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
