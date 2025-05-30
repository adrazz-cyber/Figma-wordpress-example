#!/bin/bash
cd ~/public_html

# Create PHP script
cat > reset_wp_password.php << 'EOF'
<?php
require_once('wp-config.php');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check for existing users
$result = $mysqli->query("SELECT ID, user_login, user_email FROM " . $table_prefix . "users");
echo "=== Existing Users ===\n";
while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row['ID'] . ", Username: " . $row['user_login'] . ", Email: " . $row['user_email'] . "\n";
}

// Reset password for user ID 1
$new_password = 'FigmaWP2025!';
$password_hash = wp_hash_password($new_password);

$update = $mysqli->query("UPDATE " . $table_prefix . "users SET user_pass = '" . $password_hash . "' WHERE ID = 1");

if ($update) {
    $user = $mysqli->query("SELECT user_login FROM " . $table_prefix . "users WHERE ID = 1")->fetch_assoc();
    echo "\n=== Password Reset Successful ===\n";
    echo "Username: " . $user['user_login'] . "\n";
    echo "New Password: " . $new_password . "\n";
} else {
    echo "Error updating password: " . $mysqli->error . "\n";
}

$mysqli->close();

// Delete this file after use
unlink(__FILE__);
?>
EOF

# Run the PHP script
/usr/php82/usr/bin/php reset_wp_password.php
