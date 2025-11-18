/**
 * GYIK - Gyakori Kérdések Accordion JavaScript
 *
 * Ez a script kezeli a FAQ kérdések kibontását/összecsukását
 */

function toggleFaq(button) {
    const faqItem = button.parentElement;
    const wasActive = faqItem.classList.contains('active');

    // Összes többi FAQ bezárása (accordion viselkedés - csak egy lehet nyitva egyszerre)
    document.querySelectorAll('.faq-item').forEach(item => {
        item.classList.remove('active');
    });

    // Ha nem volt aktív, akkor kinyitjuk
    if (!wasActive) {
        faqItem.classList.add('active');

        // Opcionális: smooth scroll a kibontott elemhez
        setTimeout(() => {
            faqItem.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }, 100);
    }
}

// Opcionális: Billentyűzet navigáció (Enter és Space)
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.faq-question').forEach(button => {
        button.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                toggleFaq(this);
            }
        });
    });
});

// Opcionális: Összes FAQ bezárása ESC gomb megnyomásakor
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        document.querySelectorAll('.faq-item').forEach(item => {
            item.classList.remove('active');
        });
    }
});

// Opcionális: Több FAQ egyidejű megnyitásának engedélyezése
// Ha szeretnéd, hogy egyszerre több kérdés is nyitva lehessen,
// használd ezt a függvényt a toggleFaq helyett:
/*
function toggleFaqMultiple(button) {
    const faqItem = button.parentElement;
    faqItem.classList.toggle('active');
}
*/
