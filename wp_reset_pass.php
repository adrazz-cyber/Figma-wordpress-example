<?php
// Reset WordPress password
define('DB_HOST', 'shareddb-y.hosting.stackcp.net');
define('DB_USER', 'figma-to-wordpress-3135396987');
define('DB_PASSWORD', 'byuov2vfum');
define('DB_NAME', 'figma-to-wordpress-3135396987');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$new_password = 'demo123';
$password_hash = md5($new_password);

$query = "UPDATE wp_users SET user_pass = '$password_hash' WHERE user_login = 'figmademo'";
if ($mysqli->query($query)) {
    echo "Password successfully updated!\n";
    echo "Username: figmademo\n";
    echo "Password: $new_password\n";
} else {
    echo "Error: " . $mysqli->error . "\n";
}

$mysqli->close();
?>