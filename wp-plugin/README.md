# User Journey Map WordPress Plugin

A professional WordPress plugin that converts the Figma User Journey Map template to a fully functional WordPress component.

## Features

- **Responsive Design**: Works perfectly on desktop, tablet, and mobile devices
- **Dual Theme Support**: Light and dark theme variations with interactive switching
- **Interactive Elements**: Clickable emotion dots with hover effects and feedback
- **6-Stage Journey Process**: Need → Search → Find → Hire → Work → Payment
- **Emotional Journey Visualization**: SVG-based journey lines with animated dots
- **WordPress Integration**: Easy shortcode implementation with customizable parameters

## Installation

1. Upload the `wp-plugin` folder to your WordPress `wp-content/plugins/` directory
2. Rename the folder to `user-journey-map`
3. Activate the plugin through the WordPress admin panel
4. Use the shortcode `[user_journey_map]` on any page or post

## Usage

### Basic Shortcode
```
[user_journey_map]
```

### Customized Shortcode
```
[user_journey_map title="My Custom Journey" subtitle="Tailored user experience mapping"]
```

## Shortcode Parameters

- **title**: Custom title for the journey map (default: "User Journey Map Template")
- **subtitle**: Custom subtitle/description (default: "Visualize and optimize your user experience across all touchpoints")

## Theme Features

### Light Theme
- Clean, professional white background
- Optimized for business presentations
- High contrast for readability

### Dark Theme  
- Modern dark interface
- Reduced eye strain
- Professional appearance for dark-mode users

### Both Themes (Default)
- Side-by-side comparison view
- Perfect for demonstrating versatility
- Responsive single-column on mobile

## Technical Details

- **CSS Variables**: Figma design system implementation
- **JavaScript**: Interactive theme switching and emotion feedback
- **SVG Graphics**: Scalable journey line visualizations
- **Responsive Breakpoints**: 1024px, 768px, 480px
- **Animation System**: Smooth transitions and hover effects

## Browser Support

- Chrome 60+
- Firefox 55+
- Safari 12+
- Edge 79+

## License

MIT License - Free for commercial and personal use

## Support

For support and customization requests, visit the GitHub repository or contact the development team.
