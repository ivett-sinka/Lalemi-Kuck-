# Shortcode Használati Útmutató - Lalemi Kuckó

## 🎯 Mi ez a dokumentum?

Ez az útmutató leírja, hogyan használd a custom shortcode-okat a WordPress Gutenberg editorban.

---

## 📋 Telepítési Lépések

### 1. Fájlok feltöltése

Töltsd fel az alábbi fájlokat a WordPress theme mappádba:

```
wp-content/themes/your-theme/
├── template-parts/
│   ├── hogyan-zajlik-kezeles.php       ← Másold ide: template-parts-hogyan-zajlik-kezeles.php
│   └── gyik-accordion.php               ← Másold ide: template-parts-gyik-accordion.php
├── css/
│   ├── hogyan-zajlik-kezeles.css       ← Már megvan
│   └── gyik-accordion.css               ← Már megvan
└── js/
    ├── hogyan-zajlik-kezeles.js         ← Már megvan
    └── gyik-accordion.js                 ← Már megvan
```

**FONTOS:**
- A `template-parts-hogyan-zajlik-kezeles.php` fájlt nevezd át: `hogyan-zajlik-kezeles.php`
- A `template-parts-gyik-accordion.php` fájlt nevezd át: `gyik-accordion.php`
- Mindkettőt rakd a `template-parts/` mappába!

### 2. Functions.php módosítása

Nyisd meg a `functions.php` fájlt és add hozzá a fájl **végéhez** ezt a kódot:

```php
/**
 * ========================================
 * CUSTOM SHORTCODES - Lalemi Kuckó
 * ========================================
 */

// CSS és JS fájlok betöltése
function enqueue_custom_components_assets() {
    // Hogyan zajlik komponens
    wp_enqueue_style(
        'hogyan-zajlik-style',
        get_template_directory_uri() . '/css/hogyan-zajlik-kezeles.css',
        array(),
        '1.0.0'
    );

    wp_enqueue_script(
        'hogyan-zajlik-script',
        get_template_directory_uri() . '/js/hogyan-zajlik-kezeles.js',
        array(),
        '1.0.0',
        true
    );

    // GYIK accordion
    wp_enqueue_style(
        'gyik-accordion-style',
        get_template_directory_uri() . '/css/gyik-accordion.css',
        array(),
        '1.0.0'
    );

    wp_enqueue_script(
        'gyik-accordion-script',
        get_template_directory_uri() . '/js/gyik-accordion.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_components_assets');

// Shortcode regisztrálása
function register_lalemi_shortcodes() {
    add_shortcode('hogyan_zajlik', 'hogyan_zajlik_shortcode');
    add_shortcode('gyik', 'gyik_shortcode');
}
add_action('init', 'register_lalemi_shortcodes');

// Hogyan zajlik egy kezelés shortcode
function hogyan_zajlik_shortcode($atts) {
    ob_start();
    include(locate_template('template-parts/hogyan-zajlik-kezeles.php'));
    return ob_get_clean();
}

// GYIK shortcode
function gyik_shortcode($atts) {
    ob_start();
    include(locate_template('template-parts/gyik-accordion.php'));
    return ob_get_clean();
}
```

---

## 🖊️ Használat a Gutenberg Editorban

### Lépés 1: Nyisd meg az oldalt

Menj az **Árak** oldalra a WordPress adminban (Pages → Árak → Edit)

### Lépés 2: Írj tartalmat

Írj normál Gutenberg blokkokat (bekezdés, kép, stb.)

### Lépés 3: Shortcode beillesztése

1. Kattints a **+** gombra (új blokk hozzáadása)
2. Keresd a **"Shortcode"** blokkot
3. Írd be a shortcode-ot:
   - `[hogyan_zajlik]` - Hogyan zajlik egy kezelés komponens
   - `[gyik]` - GYIK accordion

### Példa Struktúra:

```
┌─────────────────────────────────────┐
│  Heading: Kezelések                 │
└─────────────────────────────────────┘
┌─────────────────────────────────────┐
│  Paragraph: Leírás...               │
└─────────────────────────────────────┘
┌─────────────────────────────────────┐
│  Shortcode: [hogyan_zajlik]         │ ← Ide írd be!
└─────────────────────────────────────┘
┌─────────────────────────────────────┐
│  Paragraph: További szöveg...       │
└─────────────────────────────────────┘
┌─────────────────────────────────────┐
│  Shortcode: [gyik]                  │ ← Ide írd be!
└─────────────────────────────────────┘
┌─────────────────────────────────────┐
│  Paragraph: Záró szöveg...          │
└─────────────────────────────────────┘
```

### Lépés 4: Mentés

Kattints a **"Frissítés"** vagy **"Közzététel"** gombra.

---

## ✅ Ellenőrzés

1. Látogasd meg az **Árak** oldalt a frontendon
2. Ellenőrizd, hogy:
   - ✅ A "Hogyan zajlik egy kezelés?" szekció megjelenik
   - ✅ A GYIK szekció megjelenik
   - ✅ Az animációk működnek (kattints a "Több infó >" linkekre)
   - ✅ A CSS stílusok betöltődtek

---

## 🔧 Hibaelhárítás

### Probléma: A shortcode szövegként jelenik meg

**Megoldás:**
- Ellenőrizd, hogy a `functions.php`-ba beillesztetted a kódot
- Ellenőrizd, hogy nem maradt szintaktikai hiba (hiányzó pontosvessző, zárójel)

### Probléma: A stílusok nem töltődnek be

**Megoldás:**
- Ellenőrizd a fájl útvonalakat a `functions.php`-ban
- Ellenőrizd, hogy a CSS fájlok a `css/` mappában vannak
- Ürítsd a cache-t (ha cache plugin van)

### Probléma: A template parts fájlok nem találhatók

**Megoldás:**
- Ellenőrizd, hogy a `template-parts/` mappa létezik
- Ellenőrizd a fájlneveket (kis-nagybetű számít!)

---

## 📌 Shortcode-ok listája

| Shortcode         | Leírás                              |
|-------------------|-------------------------------------|
| `[hogyan_zajlik]` | Hogyan zajlik egy kezelés? (4 lépés) |
| `[gyik]`          | GYIK - Gyakori kérdések accordion    |

---

## 🎨 Testreszabás

Ha módosítani szeretnéd a tartalmat:

1. **HTML tartalom:** `template-parts/hogyan-zajlik-kezeles.php` vagy `template-parts/gyik-accordion.php`
2. **CSS stílusok:** `css/hogyan-zajlik-kezeles.css` vagy `css/gyik-accordion.css`
3. **JavaScript:** `js/hogyan-zajlik-kezeles.js` vagy `js/gyik-accordion.js`

---

## 📞 Támogatás

Ha bármi kérdésed van, írj!

**Készítette:** Claude AI Assistant
**Projekt:** Lalemi Kuckó
**Dátum:** 2025
