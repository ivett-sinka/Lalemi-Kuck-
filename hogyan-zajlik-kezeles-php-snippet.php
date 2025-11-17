<?php
/**
 * PHP sablon snippet - Hogyan zajlik egy kezelés szekció
 *
 * Ez a snippet beilleszthető a WordPress sablonba vagy bármilyen PHP fájlba
 * A Gutenberg blokk után jön ez a rész
 */
?>

<!-- Hogyan zajlik egy kezelés - Animált komponens -->
<div class="main-container">
    <!-- 1. Időpontfoglalás -->
    <div class="step-container" id="step1">
        <button class="close-button" onclick="closeStep('step1')">×</button>

        <div class="step-content">
            <div class="step-icon">📅</div>
            <h3>1. Időpontfoglalás</h3>
            <p class="step-description">Az első lépés mindig az időpontfoglalás – ezt megteheted online az időpontfoglaló rendszeremen keresztül, vagy akár egy egyszerű telefonhívással vagy üzenettel is.</p>
            <a class="toggle-link" onclick="toggleStep('step1')">
                <span class="link-text">Több infó ></span>
            </a>
        </div>

        <div class="arrow-indicator">↓</div>

        <div class="detailed-content">
            <div class="three-columns">
                <div class="column">
                    <div class="column-icon">🕒</div>
                    <p>Mikorra foglalhatsz időpontot?</p>
                    <ul>
                        <li>Hétköznap: 9:00 - 18:00</li>
                        <li>Hétvégén egyedi megbeszélés szerint</li>
                        <li>Rugalmasan kezelem az időpontokat</li>
                    </ul>
                </div>

                <div class="column">
                    <div class="column-icon">📞</div>
                    <p>Hogy foglalj?</p>
                    <ul>
                        <li>Telefonon: +36 30 280 1463</li>
                        <li>sms-ben</li>
                    </ul>
                    <button class="booking-button" onclick="window.location.href='#foglalaslink'">Foglalj időpontot most ></button>
                </div>

                <div class="column">
                    <div class="column-icon">🎒</div>
                    <p>Mit hozz magaddal?</p>
                    <ul>
                        <li>Kényelmes ruhát</li>
                        <li>Nyitott szív és kíváncsiság</li>
                        <li>Ha vannak konkrét egészségügyi problémáid, érdemes előre jelezni.</li>
                    </ul>
                </div>
            </div>

            <div class="cancellation-policy">
                <div class="policy-icon">⚠️</div>
                <div class="policy-content">
                    <p><strong>Lemondási feltétel</strong></p>
                    <p>Ha nem tudsz eljönni, lemondhatod a kezelést ingyenesen, de 24 órán belüli lemondás esetén a kezelés 50%-a felszámolásra kerül, így mások is foglalhatnak a felszabadult időpontra.</p>
                    <a href="#gyik">Tudj meg többet a foglalási feltételekről ></a>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. Első találkozás és állapotfelmérés -->
    <div class="step-container" id="step2">
        <button class="close-button" onclick="closeStep('step2')">×</button>

        <div class="step-content">
            <div class="step-icon">💬</div>
            <h3>2. Első találkozás és állapotfelmérés</h3>
            <p class="step-description">Amikor megérkezel, nincs sietség, nincs nyomás. Az első feladat mindig arra szánom, hogy megismerjük egymást, és megértsem, mi hozott el hozzám.</p>
            <a class="toggle-link" onclick="toggleStep('step2')">
                <span class="link-text">Több infó ></span>
            </a>
        </div>

        <div class="arrow-indicator">↓</div>

        <div class="detailed-content">
            <div class="three-columns">
                <div class="column">
                    <div class="column-icon">💭</div>
                    <p>Miről beszélgetünk?</p>
                    <ul>
                        <li>Mi az a probléma, ami most jelen? Fájdalom, stressz, kimerültség stb.</li>
                        <li>Vannak-e különleges körülmények? (pl. terhesség, műtét, gyógyszerszedés)</li>
                        <li>Milyen céljaid vannak? (Relaxáció, fájdalomcsillapítás, energiaszint növelése)</li>
                        <li>Van-e sajátságos egészségügyi problémád, amit tudnom kell, érdemes előre jelezni.</li>
                    </ul>
                </div>

                <div class="column">
                    <div class="column-icon">🔍</div>
                    <p>Hogyan zajlik a beszélgetés?</p>
                    <ul>
                        <li>Nyugodt, bizalmas légkörben</li>
                        <li>Minden információd amit itt elmondasz, szigorúan bizalmas, amit csak a kezeléshez használok fel</li>
                        <li>Nem ítélkezem, csak hallgatlak</li>
                    </ul>
                </div>

                <div class="column">
                    <div class="column-icon">✨</div>
                    <p>Mi történik ezzel?</p>
                    <ul>
                        <li>Így tudom a kezelést teljesen rád szabni</li>
                        <li>Így tudom a technikát olyan technikát választani, ami számodra a legalkalmasabb.</li>
                        <li>Segít beállítani az elvárásokat</li>
                    </ul>
                </div>
            </div>

            <div class="cancellation-policy">
                <div class="policy-icon">💡</div>
                <div class="policy-content">
                    <p><strong>Fontos!</strong></p>
                    <p>Az első beszélgetésen a kezelés felépítését is megtervezzük, hogy melyik technikát alkalmazzuk.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. A kezelés -->
    <div class="step-container" id="step3">
        <button class="close-button" onclick="closeStep('step3')">×</button>

        <div class="step-content">
            <div class="step-icon">👋</div>
            <h3>3. A kezelés</h3>
            <p class="step-description">Most következik a kezelés – az a rész, amikor végre leállhatsz, és magadra figyelhetsz.</p>
            <a class="toggle-link" onclick="toggleStep('step3')">
                <span class="link-text">Több infó ></span>
            </a>
        </div>

        <div class="arrow-indicator">↓</div>

        <div class="detailed-content">
            <div class="three-columns">
                <div class="column">
                    <div class="column-icon">🛏️</div>
                    <p>Hol zajlik a kezelés?</p>
                    <ul>
                        <li>Egy kényes kialakítású, meleg, csendes környezetben, ahol nincs más, csak te és a nyugalom</li>
                        <li>Barátságos, otthonos környezetben</li>
                        <li>Takarókkal és párnákkal ellátva</li>
                    </ul>
                </div>

                <div class="column">
                    <div class="column-icon">⏱️</div>
                    <p>Hogyan zajlik a kezelés?</p>
                    <ul>
                        <li>Ez attól függ, milyen kezelést választottunk.</li>
                        <li>A folyamat így a fájdalmas pontokra és az előzetes felmérés során feltárt problémákra fókuszálva halad tovább.</li>
                        <li>Személyre szabott érintés</li>
                        <li>Fókusz az igényeidre</li>
                        <li>Párbeszéd (ha szükséges, megkérdezlek, minden rendben van-e)</li>
                    </ul>
                </div>

                <div class="column">
                    <div class="column-icon">🌟</div>
                    <p>Mennyi ideig tart egy kezelés?</p>
                    <ul>
                        <li>A legtöbb kezelés 50-80 percig tart, de az első alkalom hosszabb is lehet (70-80 perc), mert időt szánunk a megismerésre és az állapotfelmérésre. Vannak 30 perces rövidebb kezelések is, mint például a Carbon szauna és a Spa méregtelenítés.</li>
                    </ul>
                </div>
            </div>

            <div class="cancellation-policy">
                <div class="policy-icon">💆</div>
                <div class="policy-content">
                    <p><strong>Fontos!</strong></p>
                    <p>Bárhol alszik ered, arra bízlak? Kiváncsi szöveg ami majd kitalálok a relaxáció utáni tudatos számára.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 4. Kezelés után és otthoni támogatás -->
    <div class="step-container" id="step4">
        <button class="close-button" onclick="closeStep('step4')">×</button>

        <div class="step-content">
            <div class="step-icon">🏡</div>
            <h3>4. Kezelés után és otthoni támogatás</h3>
            <p class="step-description">A kezelés nem ér véget, amikor felállsz az asztalról. A cél, hogy a hatása hosszú távon megmaradjon, és otthon is tudj magadon segíteni.</p>
            <a class="toggle-link" onclick="toggleStep('step4')">
                <span class="link-text">Több infó ></span>
            </a>
        </div>

        <div class="arrow-indicator">↓</div>

        <div class="detailed-content">
            <div class="three-columns">
                <div class="column">
                    <div class="column-icon">💬</div>
                    <p>Mit tapasztalhatsz a kezelés után?</p>
                    <ul>
                        <li>Azonnali könnyebbséget</li>
                        <li>Ellazult, pihenő állapot egy időre</li>
                        <li>Fokozott érzékenység (ez fontos, hogy megértsd, hogy miért)</li>
                        <li>Nehéz érzések, esetlegesen (nem mindig van ilyen, de ha van, normális)</li>
                    </ul>
                </div>

                <div class="column">
                    <div class="column-icon">🏠</div>
                    <p>Mit javaslok otthonra?</p>
                    <ul>
                        <li>Minden esetben annyi vízzel életet kapsz közepes savanyított, probiotikus italokkal, stb hanem</li>
                        <li>Ráfigyelés nyugágykollázásra (nem érted? akkor elmondom pontosabban)</li>
                        <li>Testhalász, apad, ha célravezető</li>
                        <li>Sólfürdő stb</li>
                    </ul>
                </div>

                <div class="column">
                    <div class="column-icon">🔄</div>
                    <p>Hogyan gyakorlat érdemes időt jövő kezelést?</p>
                    <ul>
                        <li>Ez attól függ, mi a célod/ed hogy mennyivel szeretnéd javítani vagy fenntartani</li>
                        <li>Fájdalomcsillapítás: Rövidebb időközönként</li>
                        <li>Relaxációs/stresszoldás: Időszakosan</li>
                    </ul>
                </div>
            </div>

            <div class="cancellation-policy">
                <div class="policy-icon">📞</div>
                <div class="policy-content">
                    <p><strong>Kérdéseid maradtak?</strong></p>
                    <p>Ne aggódj, bármi kérdés felmerülhet még szivesen beszélek vele! Hívj mindenkor +36 30 280 1463 vagy írj emailt időpontfoglalórendszertárán és tudok ajánlani amit segítség!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
/**
 * Jegyzet: A CSS és JS fájlokat be kell illeszteni a WordPress theme-be:
 *
 * functions.php-ban:
 *
 * function enqueue_hogyan_zajlik_scripts() {
 *     wp_enqueue_style('hogyan-zajlik-style', get_template_directory_uri() . '/css/hogyan-zajlik-kezeles.css');
 *     wp_enqueue_script('hogyan-zajlik-script', get_template_directory_uri() . '/js/hogyan-zajlik-kezeles.js', array(), '1.0', true);
 * }
 * add_action('wp_enqueue_scripts', 'enqueue_hogyan_zajlik_scripts');
 */
?>
