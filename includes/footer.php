    </main>
    
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <h3 class="footer-title"><?php echo COMPANY_NAME; ?></h3>
                    <p class="footer-text"><?php echo SITE_DESCRIPTION; ?></p>
                </div>
                
                <div class="footer-col">
                    <h3 class="footer-title">Kontakt</h3>
                    <ul class="footer-list">
                        <li>
                            <strong><?php echo COMPANY_OWNER; ?></strong><br>
                            <?php echo COMPANY_POSITION; ?>
                        </li>
                        <li>
                            <?php echo COMPANY_ADDRESS; ?><br>
                            <?php echo COMPANY_ZIP; ?> <?php echo COMPANY_CITY; ?>
                        </li>
                        <li>
                            <a href="tel:<?php echo str_replace(' ', '', COMPANY_PHONE); ?>">
                                <?php echo COMPANY_PHONE_DISPLAY; ?>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:<?php echo COMPANY_EMAIL; ?>">
                                <?php echo COMPANY_EMAIL; ?>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3 class="footer-title">Otevírací doba</h3>
                    <ul class="footer-list">
                        <?php foreach (OPENING_HOURS as $day => $hours): ?>
                            <li><?php echo $day; ?>: <strong><?php echo $hours; ?></strong></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3 class="footer-title">Navigace</h3>
                    <ul class="footer-list">
                        <?php foreach (MENU_ITEMS as $item): ?>
                            <li>
                                <a href="<?php echo $item['url']; ?>" title="<?php echo $item['title']; ?>">
                                    <?php echo $item['label']; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php echo COMPANY_NAME; ?>. Všechna práva vyhrazena.</p>
            </div>
        </div>
    </footer>
    
    <script src="/js/main.js"></script>
</body>
</html>
