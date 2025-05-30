<?php
/**
 * Plugin Name: User Journey Map Template
 * Plugin URI: https://github.com/adrazz-cyber/Figma-wordpress-example
 * Description: Professional User Journey Map template converted from Figma design
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
    }
    
    public function init() {
        // Initialize plugin
    }
    
    public function enqueue_assets() {
        // Only enqueue on pages that use the shortcode
        global $post;
        if (is_a($post, 'WP_Post') && has_shortcode($post->post_content, 'user_journey_map')) {
            wp_enqueue_style(
                'user-journey-map-style',
                plugins_url('assets/journey-map.css', __FILE__),
                array(),
                '1.0.0'
            );
            
            wp_enqueue_script(
                'user-journey-map-script',
                plugins_url('assets/journey-map.js', __FILE__),
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
        ?>
        <div class="journey-container">
            <!-- Header -->
            <div class="journey-header">
                <h1 class="journey-title"><?php echo esc_html($atts['title']); ?></h1>
                <p class="journey-subtitle"><?php echo esc_html($atts['subtitle']); ?></p>
                
                <!-- Theme Toggle -->
                <div class="theme-toggle">
                    <button class="theme-btn active" data-theme="both">Both Themes</button>
                    <button class="theme-btn" data-theme="light">Light Mode</button>
                    <button class="theme-btn" data-theme="dark">Dark Mode</button>
                </div>
            </div>
            
            <!-- Dual Journey Maps -->
            <div class="maps-container" id="mapsContainer">
                <!-- Light Theme Journey Map -->
                <div class="journey-map light-theme" id="lightMap">
                    <div class="map-header">
                        <h2 class="map-title">User's Journey Map</h2>
                        <p class="map-subtitle">Light Theme Experience</p>
                    </div>
                    
                    <!-- Stage Headers -->
                    <div class="stages-header">
                        <div class="stage-header">Need</div>
                        <div class="stage-header">Search</div>
                        <div class="stage-header">Find</div>
                        <div class="stage-header">Hire</div>
                        <div class="stage-header">Work</div>
                        <div class="stage-header">Payment</div>
                    </div>
                    
                    <!-- Emotional Journey Line -->
                    <div class="emotion-line-container">
                        <svg class="emotion-line" viewBox="0 0 400 120">
                            <path class="journey-line" d="M 30 80 Q 80 40 130 60 Q 180 80 230 30 Q 280 50 330 70 Q 370 60 390 40"/>
                        </svg>
                        <div class="stage-dot happy" style="left: 5%; top: 60%" data-emotion="happy"></div>
                        <div class="stage-dot neutral" style="left: 22%; top: 40%" data-emotion="neutral"></div>
                        <div class="stage-dot happy" style="left: 39%; top: 20%" data-emotion="happy"></div>
                        <div class="stage-dot neutral" style="left: 56%; top: 35%" data-emotion="neutral"></div>
                        <div class="stage-dot happy" style="left: 73%; top: 45%" data-emotion="happy"></div>
                        <div class="stage-dot happy" style="left: 90%; top: 25%" data-emotion="happy"></div>
                    </div>
                    
                    <!-- Stage Details -->
                    <div class="stages-details">
                        <div class="stage-detail">
                            <h3 class="stage-title">Need</h3>
                            <p class="stage-description">User identifies a problem or requirement that needs to be addressed.</p>
                            <div class="stage-actions">
                                <div class="stage-action">• Experiences about the problem</div>
                                <div class="stage-action">• Searches validation</div>
                                <div class="stage-action">• Reads about online</div>
                            </div>
                        </div>
                        
                        <div class="stage-detail">
                            <h3 class="stage-title">Search</h3>
                            <p class="stage-description">Actively looking for solutions and comparing different options.</p>
                            <div class="stage-actions">
                                <div class="stage-action">• Tight the world is so active</div>
                                <div class="stage-action">• Quick and easy to find</div>
                                