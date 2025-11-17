/**
 * Hogyan zajlik egy kezelés - Animált komponens JavaScript
 *
 * Ez a script kezeli a lépések kibontását/összecsukását animációval
 */

function toggleStep(stepId) {
    const step = document.getElementById(stepId);
    const linkText = step.querySelector('.link-text');

    if (step.classList.contains('expanded')) {
        step.classList.remove('expanded');
        linkText.textContent = 'Több infó >';
    } else {
        step.classList.add('expanded');
        linkText.textContent = 'Kevesebb infó ×';
    }
}

function closeStep(stepId) {
    const step = document.getElementById(stepId);
    const linkText = step.querySelector('.link-text');

    step.classList.remove('expanded');
    linkText.textContent = 'Több infó >';
}

// Opcionális: Automatikus bezárás ESC gomb megnyomásakor
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        const expandedSteps = document.querySelectorAll('.step-container.expanded');
        expandedSteps.forEach(step => {
            closeStep(step.id);
        });
    }
});

// Opcionális: Smooth scroll animáció a kibontott tartalomhoz
function toggleStepWithScroll(stepId) {
    toggleStep(stepId);

    setTimeout(() => {
        const step = document.getElementById(stepId);
        if (step.classList.contains('expanded')) {
            step.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }, 100);
}
