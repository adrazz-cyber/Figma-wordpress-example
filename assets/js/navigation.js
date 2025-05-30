/**
 * File navigation.js
 *
 * Handles navigation menu for mobile devices
 */

(function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const menuWrapper = document.querySelector('.menu-wrapper');
    
    if (!menuToggle || !menuWrapper) {
        return;
    }
    
    menuToggle.addEventListener('click', function() {
        const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
        
        menuToggle.setAttribute('aria-expanded', !isExpanded);
        menuWrapper.classList.toggle('is-open');
        document.body.classList.toggle('menu-open');
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.main-navigation')) {
            menuToggle.setAttribute('aria-expanded', 'false');
            menuWrapper.classList.remove('is-open');
            document.body.classList.remove('menu-open');
        }
    });
    
    // Handle escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && menuWrapper.classList.contains('is-open')) {
            menuToggle.setAttribute('aria-expanded', 'false');
            menuWrapper.classList.remove('is-open');
            document.body.classList.remove('menu-open');
            menuToggle.focus();
        }
    });
})();