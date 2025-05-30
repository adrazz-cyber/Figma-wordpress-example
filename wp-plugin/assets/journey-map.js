// Theme switching functionality
const themeButtons = document.querySelectorAll('.theme-btn');
const mapsContainer = document.getElementById('mapsContainer');
const lightMap = document.getElementById('lightMap');
const darkMap = document.getElementById('darkMap');

// Stage dots interaction
const stageDots = document.querySelectorAll('.stage-dot');

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    // Add interactive behavior to stage dots
    stageDots.forEach(dot => {
        dot.addEventListener('click', function() {
            // Remove active class from all dots in the same map
            const mapContainer = this.closest('.journey-map');
            const mapDots = mapContainer.querySelectorAll('.stage-dot');
            mapDots.forEach(d => d.classList.remove('active'));
            
            // Add active class to clicked dot
            this.classList.add('active');
            
            // Create emotion feedback
            const emotion = this.dataset.emotion;
            showEmotionFeedback(emotion, this);
        });
        
        // Hover effects
        dot.addEventListener('mouseenter', function() {
            const emotion = this.dataset.emotion;
            this.title = `Emotion: ${emotion.charAt(0).toUpperCase() + emotion.slice(1)}`;
        });
    });
    
    // Theme button functionality
    themeButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            themeButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            const theme = this.dataset.theme;
            switchTheme(theme);
        });
    });
    
    // Add loading animation on startup
    setTimeout(() => {
        document.querySelectorAll('.journey-map').forEach(map => {
            map.classList.remove('loading');
        });
    }, 500);
});

function switchTheme(theme) {
    if (!mapsContainer || !lightMap || !darkMap) return;
    
    mapsContainer.classList.add('loading');
    
    setTimeout(() => {
        switch(theme) {
            case 'light':
                lightMap.style.display = 'block';
                darkMap.style.display = 'none';
                mapsContainer.style.gridTemplateColumns = '1fr';
                break;
            case 'dark':
                lightMap.style.display = 'none';
                darkMap.style.display = 'block';
                mapsContainer.style.gridTemplateColumns = '1fr';
                break;
            case 'both':
            default:
                lightMap.style.display = 'block';
                darkMap.style.display = 'block';
                mapsContainer.style.gridTemplateColumns = '1fr 1fr';
                break;
        }
        mapsContainer.classList.remove('loading');
    }, 300);
}

function showEmotionFeedback(emotion, element) {
    // Create feedback element
    const feedback = document.createElement('div');
    feedback.textContent = emotion.charAt(0).toUpperCase() + emotion.slice(1);
    feedback.style.cssText = `
        position: absolute;
        top: -30px;
        left: 50%;
        transform: translateX(-50%);
        background: var(--dark);
        color: var(--white);
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 12px;
        font-weight: 600;
        opacity: 0;
        animation: fadeInOut 2s ease;
        pointer-events: none;
        z-index: 1000;
    `;
    
    // Add CSS animation if not exists
    if (!document.querySelector('#emotion-feedback-styles')) {
        const style = document.createElement('style');
        style.id = 'emotion-feedback-styles';
        style.textContent = `
            @keyframes fadeInOut {
                0% { opacity: 0; transform: translateX(-50%) translateY(10px); }
                50% { opacity: 1; transform: translateX(-50%) translateY(0); }
                100% { opacity: 0; transform: translateX(-50%) translateY(-10px); }
            }
        `;
        document.head.appendChild(style);
    }
    
    element.style.position = 'relative';
    element.appendChild(feedback);
    
    // Remove feedback after animation
    setTimeout(() => {
        if (feedback.parentNode) {
            feedback.parentNode.removeChild(feedback);
        }
    }, 2000);
}

// Add responsive behavior
function handleResize() {
    if (window.innerWidth <= 1024) {
        // On tablet/mobile, show one theme at a time by default
        const activeTheme = document.querySelector('.theme-btn.active');
        if (activeTheme && activeTheme.dataset.theme === 'both') {
            switchTheme('light');
            document.querySelector('[data-theme="light"]')?.classList.add('active');
            document.querySelector('[data-theme="both"]')?.classList.remove('active');
        }
    }
}

window.addEventListener('resize', handleResize);

// Initialize with loading state
document.querySelectorAll('.journey-map').forEach(map => {
    map.classList.add('loading');
});
