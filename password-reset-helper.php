<?php
/**
 * Plugin Name: Password Reset Helper
 * Description: Temporarily reset admin password
 * Version: 1.0
 */

// Reset password when this file is accessed directly
if (basename($_SERVER['PHP_SELF']) == 'password-reset-helper.php') {
    require_once('../../../wp-load.php');
    
    global $wpdb;
    
    // Reset password for user ID 1
    $new_password = 'demo123';
    $password_hash = wp_hash_password($new_password);
    
    $wpdb->update(
        $wpdb->users,
        array('user_pass' => $password_hash),
        array('ID' => 1)
    );
    
    echo "Password has been reset!<br>";
    echo "Username: figmademo<br>";
    echo "Password: demo123<br>";
    echo "<a href='/wp-admin'>Login here</a>";
    exit;
}
?>