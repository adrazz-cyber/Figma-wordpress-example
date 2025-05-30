<?php
/**
 * Plugin Name: User Journey Map Template
 * Plugin URI: https://github.com/adrazz-cyber/Figma-wordpress-example
 * Description: Professional User Journey Map template converted from Figma design. Use shortcode [user_journey_map] to display.
 * Version: 1.0.0
 * Author: Adam
 * License: MIT
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

class UserJourneyMapPlugin {
    
    public function __construct() {
        add_action('init', array($this, 'init'));
        add_shortcode('user_journey_map', array($this, 'render_journey_map'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue_assets'));
        add_action('admin_menu', array($this, 'add_admin_menu'));
    }
    
    public function init() {
        // Plugin initialization
    }
    
    public function add_admin_menu() {
        add_options_page(
            'User Journey Map',
            'Journey Map',
            'manage_options',
            'user-journey-map',
            array($this, 'admin_page')
        );
    }
    
    public function admin_page() {
        ?>
        <div class="wrap">
            <h1>User Journey Map Template</h1>
            <p>Use the shortcode <code>[user_journey_map]</code> to display the journey map on any page or post.</p>
            <h3>Shortcode Options:</h3>
            <ul>
                <li><strong>title</strong> - Custom title (default: "User Journey Map Template")</li>
                <li><strong>subtitle</strong> - Custom subtitle (default: "Visualize and optimize your user experience...")</li>
            </ul>
            <h3>Example Usage:</h3>
            <code>[user_journey_map title="My Custom Journey" subtitle="Custom description"]</code>
        </div>
        <?php
    }
    
    public function enqueue_assets() {
        // Only enqueue on pages that use the shortcode or if we're previewing
        global $post;
        if ((is_a($post, 'WP_Post') && has_shortcode($post->post_content, 'user_journey_map')) || 
            is_admin() || 
            isset($_GET['preview'])) {
            
            wp_enqueue_style(
                'user-journey-map-style',
                plugin_dir_url(__FILE__) . 'assets/journey-map.css',
                array(),
                '1.0.0'
            );
            
            wp_enqueue_script(
                'user-journey-map-script',
                plugin_dir_url(__FILE__) . 'assets/journey-map.js',
                array(),
                '1.0.0',
                true
            );
        }
    }
    
    public function render_journey_map($atts) {
        $atts = shortcode_atts(array(
            'title' => 'User Journey Map Template',
            'subtitle' => 'Visualize and optimize your user experience across all touchpoints'
        ), $atts);
        
        ob_start();
        include plugin_dir_path(__FILE__) . 'templates/journey-map-template.php';
        return ob_get_clean();
    }
}

// Initialize the plugin
new UserJourneyMapPlugin();
?>
