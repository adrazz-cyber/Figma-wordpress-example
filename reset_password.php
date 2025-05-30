<?php
// Database connection details
$host = 'shareddb-y.hosting.stackcp.net';
$username = 'figma-to-wordpress-3135396987';
$password = 'byuov2vfum';
$database = 'figma-to-wordpress-3135396987';

// Connect to database
$mysqli = new mysqli($host, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// First, let's find the admin user
$result = $mysqli->query("SELECT ID, user_login, user_email FROM wp_users WHERE ID = 1");
if ($row = $result->fetch_assoc()) {
    echo "Found user: " . $row['user_login'] . " (Email: " . $row['user_email'] . ")\n";
    
    // Generate new password hash
    $new_password = 'FigmaWP2025!';
    $password_hash = md5($new_password); // WordPress uses MD5 for initial password set
    
    // Update the password
    $update_query = "UPDATE wp_users SET user_pass = '$password_hash' WHERE ID = 1";
    if ($mysqli->query($update_query)) {
        echo "Password successfully reset!\n";
        echo "Username: " . $row['user_login'] . "\n";
        echo "New Password: " . $new_password . "\n";
    } else {
        echo "Error updating password: " . $mysqli->error . "\n";
    }
} else {
    echo "No admin user found. Let's check all users:\n";
    $all_users = $mysqli->query("SELECT ID, user_login, user_email FROM wp_users");
    while ($user = $all_users->fetch_assoc()) {
        echo "User ID: " . $user['ID'] . ", Username: " . $user['user_login'] . ", Email: " . $user['user_email'] . "\n";
    }
}

$mysqli->close();
?>
