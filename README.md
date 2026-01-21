# MR METALL s.r.o. - Webové stránky

Moderní webové stránky pro firmu MR METALL s.r.o. - kovovýroba a zámečnictví.

## 🔧 Technologie

- **PHP 7.4+** - Backend
- **HTML5, CSS3, JavaScript** - Frontend
- **SEO optimalizované** - Meta tagy, strukturovaná data, sitemap
- **Responzivní design** - Mobilní zařízení, tablety, desktop
- **Bez závislostí** - Čistý PHP bez frameworků

## 📁 Struktura projektu

```
mrmetall/
├── config.php              # Konfigurace webu
├── includes/
│   ├── header.php          # Hlavička stránky
│   ├── footer.php          # Patička stránky
│   └── functions.php       # Pomocné funkce
├── public/                 # Veřejné soubory (DocumentRoot)
│   ├── index.php           # Domovská stránka
│   ├── planovani.php       # Stránka Plánování
│   ├── vyroba.php          # Stránka Výroba
│   ├── instalace.php       # Stránka Instalace
│   ├── opravy.php          # Stránka Opravy
│   ├── kontakt.php         # Kontaktní stránka
│   ├── 404.php             # Chybová stránka 404
│   ├── .htaccess           # Apache konfigurace
│   ├── robots.txt          # Robots pro SEO
│   ├── sitemap.xml         # Sitemap pro SEO
│   ├── css/
│   │   └── styles.css      # Hlavní CSS
│   ├── js/
│   │   └── main.js         # Hlavní JavaScript
│   └── images/             # Obrázky
└── README.md               # Dokumentace
```

## 🚀 Instalace na Wedos

### 1. Upload souborů

Nahrajte všechny soubory na Wedos FTP:
- Složku `public/` umístěte do DocumentRoot (např. `www/`)
- Soubory `config.php`, `includes/` dejte o úroveň výš (mimo DocumentRoot pro bezpečnost)

### 2. Nastavení DocumentRoot

V administraci Wedosu nastavte DocumentRoot na složku `public/`

### 3. Konfigurace

Upravte `config.php` a nastavte:
- `SITE_URL` - URL vašeho webu
- `COMPANY_EMAIL` - Email pro příjem zpráv z formuláře

### 4. Nastavení oprávnění

Ujistěte se, že PHP má práva pro čtení všech souborů:
```bash
chmod 644 *.php
chmod 755 public/
```

### 5. Testování

Otevřete web v prohlížeči a zkontrolujte:
- ✅ Všechny stránky se načítají
- ✅ Kontaktní formulář funguje
- ✅ Responzivní design na mobilu

## 📧 Kontaktní formulář

Formulář odesílá emaily na adresu definovanou v `COMPANY_EMAIL` (config.php).

**Poznámka:** Na Wedosu může být potřeba nastavit SPF záznamy pro správné doručování emailů.

## 🔍 SEO Optimalizace

Web obsahuje:
- ✅ Meta tagy (title, description, keywords)
- ✅ Open Graph tagy
- ✅ JSON-LD strukturovaná data (LocalBusiness)
- ✅ Sitemap.xml
- ✅ Robots.txt
- ✅ SEO friendly URLs (.htaccess)
- ✅ Responzivní design (mobile-first)
- ✅ Rychlé načítání (optimalizace, cache)

## 🎨 Přizpůsobení

### Změna barev

Upravte CSS proměnné v `public/css/styles.css`:
```css
:root {
    --primary-color: #c41e3a;
    --secondary-color: #2c3e50;
    /* ... */
}
```

### Přidání obrázků

Nahrajte obrázky do `public/images/` a upravte odkazy v PHP souborech.

### Změna obsahu

Upravte text přímo v PHP souborech nebo v `config.php` pro globální změny.

## 📱 Responzivní design

Web je plně responzivní s breakpointy:
- 📱 Mobile: < 576px
- 📱 Tablet: 576px - 992px
- 💻 Desktop: > 992px

## 🔒 Bezpečnost

- ✅ Sanitizace vstupů
- ✅ Validace emailů
- ✅ Ochrana proti XSS
- ✅ Bezpečnostní HTTP hlavičky
- ✅ Ochrana citlivých souborů (.htaccess)

## 📞 Kontakt

**MR METALL s.r.o.**
- 📍 Hlinsko 36, České Budějovice, 370 01
- 📞 +420 607 606 547
- 📧 machacek.milda@seznam.cz

## 📝 Licence

© 2026 MR METALL s.r.o. Všechna práva vyhrazena.