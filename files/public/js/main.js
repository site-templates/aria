// Add your javascript here
//
// The layout loads this file at the end of <body>, so the document is ready when it runs.
// With instant navigation the header, footer and this script persist across page changes while
// <main> is swapped in place — the header bindings below run once; the `instant:navigated`
// listener at the bottom recomputes what depends on the current URL and closes the mobile menu.

const SCROLLED_CLASSES = ['border-neutral-950/5', 'bg-white/80', 'backdrop-blur-xl', 'dark:border-white/10', 'dark:bg-neutral-950/80'];

// The header only grows a background and a hairline once the page has scrolled under it.
window.stickyHeaderFunctionality = function () {
    const header = document.getElementById('header');

    function evaluateHeaderPosition() {
        header.classList.toggle('border-transparent', window.scrollY <= 16);
        SCROLLED_CLASSES.forEach(function (className) {
            header.classList.toggle(className, window.scrollY > 16);
        });
    }

    evaluateHeaderPosition();
    window.addEventListener('scroll', evaluateHeaderPosition, { passive: true });
};

// The sun and moon icons are swapped by the dark: variant in CSS, so this only owns the class and the preference.
window.darkModeFunctionality = function () {
    document.getElementById('darkToggle').addEventListener('click', function () {
        const isDark = document.documentElement.classList.toggle('dark');

        if (isDark) {
            localStorage.setItem('dark_mode', true);
        } else {
            localStorage.removeItem('dark_mode');
        }
    });
};

// aria-current tells screen readers which page you are on, and styles the active link.
// Keyed on the URL, so it runs again after every in-place navigation.
window.markCurrentMenuItem = function () {
    const menuItems = document.querySelectorAll('#header nav a');

    menuItems.forEach(function (item) {
        if (item.pathname === window.location.pathname) {
            item.setAttribute('aria-current', 'page');
        } else {
            item.removeAttribute('aria-current');
        }
    });
};

window.mobileMenuFunctionality = function () {
    document.getElementById('menuToggle').addEventListener('click', function () {
        if (document.getElementById('mobileMenu').classList.contains('hidden')) {
            openMobileMenu();
        } else {
            closeMobileMenu();
        }
    });
};

window.openMobileMenu = function () {
    document.getElementById('mobileMenu').classList.remove('hidden');
    document.getElementById('menuOpenIcon').classList.add('hidden');
    document.getElementById('menuCloseIcon').classList.remove('hidden');
    document.getElementById('menuToggle').setAttribute('aria-expanded', 'true');
    document.getElementById('menuToggle').setAttribute('aria-label', 'Close menu');
};

window.closeMobileMenu = function () {
    document.getElementById('mobileMenu').classList.add('hidden');
    document.getElementById('menuCloseIcon').classList.add('hidden');
    document.getElementById('menuOpenIcon').classList.remove('hidden');
    document.getElementById('menuToggle').setAttribute('aria-expanded', 'false');
    document.getElementById('menuToggle').setAttribute('aria-label', 'Open menu');
};

// Header behaviour binds once — the header persists for the whole visit.
stickyHeaderFunctionality();
darkModeFunctionality();
mobileMenuFunctionality();

// Per-page work: nothing inside <main> is scripted in this template, so the only thing
// that follows the page is the active menu item.
window.setUp = function () {
    markCurrentMenuItem();
};

setUp();

// After an in-place page change: land on a clean page (menu closed) with the new URL marked.
document.addEventListener('instant:navigated', function () {
    closeMobileMenu();
    setUp();
});
