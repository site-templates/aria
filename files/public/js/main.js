// Add your javascript here

const SCROLLED_CLASSES = ['border-neutral-950/5', 'bg-white/80', 'backdrop-blur-xl', 'dark:border-white/10', 'dark:bg-neutral-950/80'];

document.addEventListener('DOMContentLoaded', function () {
    markCurrentMenuItem();
    stickyHeaderFunctionality();
    darkModeFunctionality();
    mobileMenuFunctionality();
});

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
window.markCurrentMenuItem = function () {
    const menuItems = document.querySelectorAll('#header nav a');

    menuItems.forEach(function (item) {
        if (item.pathname === window.location.pathname) {
            item.setAttribute('aria-current', 'page');
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
