@echo off
echo Creating password reset script on server...
"C:\Program Files\Git\bin\bash.exe" -c "ssh -i /c/Users/adam/.ssh/id_ed25519_figma_wordpress -o StrictHostKeyChecking=no figma-to-wordpress.co.uk@ssh.gb.stackcp.com 'cd public_html && cat > wp_reset_pass.php << EOF
<?php
define(\"DB_HOST\", \"shareddb-y.hosting.stackcp.net\");
define(\"DB_USER\", \"figma-to-wordpress-3135396987\");
define(\"DB_PASSWORD\", \"byuov2vfum\");
define(\"DB_NAME\", \"figma-to-wordpress-3135396987\");

\$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (\$mysqli->connect_error) {
    die(\"Connection failed: \" . \$mysqli->connect_error);
}

\$new_password = \"demo123\";
\$password_hash = md5(\$new_password);

\$query = \"UPDATE wp_users SET user_pass = \\\"\$password_hash\\\" WHERE user_login = \\\"figmademo\\\"\";
if (\$mysqli->query(\$query)) {
    echo \"Password successfully updated!\\n\";
    echo \"Username: figmademo\\n\";
    echo \"Password: \$new_password\\n\";
} else {
    echo \"Error: \" . \$mysqli->error . \"\\n\";
}

\$mysqli->close();
?>
EOF
'"