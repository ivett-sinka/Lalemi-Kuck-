# Lalemi Kuckó - "Hogyan zajlik egy kezelés?" Animált Komponens

## Áttekintés

Ez egy animált, interaktív HTML/CSS/JavaScript komponens, amely bemutatja a kezelés folyamatának 4 lépését. A komponens kibontható/összecsukható kártyákat használ, részletes információkkal és smooth animációkkal.

## Fájlok

- `hogyan-zajlik-kezeles.html` - Teljes, önálló HTML demo fájl (teszteléshez)
- `hogyan-zajlik-kezeles.css` - CSS stílusok (PHP projektbe illeszthető)
- `hogyan-zajlik-kezeles.js` - JavaScript funkciók (PHP projektbe illeszthető)
- `hogyan-zajlik-kezeles-php-snippet.php` - PHP sablon snippet (WordPress/PHP integráció)

## Működés

### Alapállapot
- A konténer **50% széles**, balra igazodik
- Tartalom: ikon, cím (h3), leírás (p), "Több infó >" link
- Nyíl (`↓`) a konténer alatt

### Kibontott állapot (kattintás után)

1. **Első animáció (vízszintes kicsúszás):**
   - Konténer szélessége **50% → 100%**
   - Tartalom igazítása **balról → középre**
   - Link szövege: "Több infó >" → "Kevesebb infó ×"
   - Nyíl fordul: `↓` → `→` (90°)

2. **Második animáció (függőleges lecsúszás):**
   - Részletes tartalom láthatóvá válik
   - **3 oszlopos grid elrendezés** (reszponzív)
   - **X gomb** megjelenik jobb felső sarokban
   - **Lemondási feltétel** szekció megjelenik az oszlopok alatt

## Használati útmutató

### 1. Önálló HTML használat (Demo)

```bash
# Nyisd meg böngészőben
open hogyan-zajlik-kezeles.html
```

### 2. WordPress/PHP integráció

#### A) CSS és JS fájlok beillesztése

**functions.php** fájlban:

```php
function enqueue_hogyan_zajlik_scripts() {
    wp_enqueue_style(
        'hogyan-zajlik-style',
        get_template_directory_uri() . '/css/hogyan-zajlik-kezeles.css'
    );

    wp_enqueue_script(
        'hogyan-zajlik-script',
        get_template_directory_uri() . '/js/hogyan-zajlik-kezeles.js',
        array(),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_hogyan_zajlik_scripts');
```

#### B) Font betöltés (ha még nincs)

**functions.php** vagy **header.php**:

```php
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&family=Bricolage+Grotesque:wght@700&display=swap" rel="stylesheet">
```

#### C) HTML tartalom beillesztése

Gutenberg blokk után illeszd be a **hogyan-zajlik-kezeles-php-snippet.php** tartalmát.

## Reszponzivitás

- **Desktop (>1024px):** 3 oszlopos elrendezés
- **Tablet (768px - 1024px):** 2 oszlopos elrendezés
- **Mobil (<768px):** 1 oszlopos elrendezés, konténer 100% széles

## Animációk részletei

### CSS Transitions

```css
.step-container {
    transition: all 0.6s ease-in-out; /* Szélesség, padding animáció */
}

.detailed-content {
    transition: max-height 0.6s ease-in-out,
                opacity 0.6s ease-in-out,
                margin-top 0.6s ease-in-out;
}
```

### JavaScript funkciók

- **toggleStep(stepId)** - Kibontja/összecsukja a lépést
- **closeStep(stepId)** - Összecsukja a lépést
- **ESC gomb** - Automatikusan bezár minden kibontott lépést

## Testreszabás

### Színek módosítása

```css
/* Fő lila szín */
--main-purple: #AE7DB2;
--main-purple-hover: #8E5D92;

/* Háttérszínek */
--gradient-bg: linear-gradient(0deg, rgba(255, 255, 255, 0.20) 0%, #FFF 48.22%);
--button-bg: #F1E8FF;
```

### Ikonok cseréje

Az emoji ikonokat lecserélheted:
- SVG ikonokra
- Font Awesome ikonokra
- Képfájlokra

Példa SVG ikonra:

```html
<div class="step-icon">
    <svg>...</svg>
</div>
```

## Böngésző kompatibilitás

- ✅ Chrome/Edge (Chromium)
- ✅ Firefox
- ✅ Safari
- ✅ Mobile browsers

## Licensz

Lalemi Kuckó projekt - 2025

## Kapcsolat

Tel: +36 30 280 1463
