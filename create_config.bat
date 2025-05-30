@echo off
echo Creating wp-config.php on server...
"C:\Program Files\Git\usr\bin\ssh.exe" -i "C:\Users\adam\.ssh\id_ed25519_figma_wordpress" -o StrictHostKeyChecking=no figma-to-wordpress.co.uk@ssh.gb.stackcp.com "cd public_html && cat > wp-config.php << 'EOF'
<?php
define( 'DB_NAME', 'figma-to-wordpress-3135396987' );
define( 'DB_USER', 'figma-to-wordpress-3135396987' );
define( 'DB_PASSWORD', 'byuov2vfum' );
define( 'DB_HOST', 'shareddb-y.hosting.stackcp.net' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

define('AUTH_KEY',         'figma-wp-IxR1Y2Z3A4b5C6d7E8f9G0hJkLmNpQrS');
define('SECURE_AUTH_KEY',  'figma-wp-TuVwXyZ1A2B3C4D5E6F7G8H9J0KLMNpQr');
define('LOGGED_IN_KEY',    'figma-wp-StUvWxYz12345678ABCDEFGHIJKLMNOP');
define('NONCE_KEY',        'figma-wp-QrStUvWxYz1234567890ABCDEFGHIJKL');
define('AUTH_SALT',        'figma-wp-MnOpQrStUvWxYz123456789ABCDEFGH');
define('SECURE_AUTH_SALT', 'figma-wp-IjKlMnOpQrStUvWxYz123456789ABC');
define('LOGGED_IN_SALT',   'figma-wp-EfGhIjKlMnOpQrStUvWxYz12345678');
define('NONCE_SALT',       'figma-wp-AbCdEfGhIjKlMnOpQrStUvWxYz1234');

$table_prefix = 'wp_';
define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
EOF"