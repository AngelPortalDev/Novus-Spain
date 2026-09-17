document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.querySelector('.ns-menu-toggle');
    const nav = document.querySelector('.ns-nav');
    toggle.addEventListener('click', () => {
        const open = toggle.getAttribute('aria-expanded') !== 'true';
        toggle.setAttribute('aria-expanded', String(open));
        nav.classList.toggle('is-open', open);
    });
    const closeMenus = () => {
        nav.querySelectorAll('details[open]').forEach(item => { item.open = false; });
    };
    nav.querySelectorAll('details').forEach(item => item.addEventListener('toggle', () => {
        if (item.open) nav.querySelectorAll('details').forEach(other => { if (other !== item) other.open = false; });
    }));
    document.addEventListener('click', event => { if (!nav.contains(event.target)) closeMenus(); });
    document.addEventListener('keydown', event => {
        if (event.key === 'Escape') {
            closeMenus();
            if (nav.classList.contains('is-open')) {
                nav.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', 'false');
                toggle.focus();
            }
        }
    });
});
