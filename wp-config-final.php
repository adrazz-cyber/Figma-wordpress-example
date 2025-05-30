<?php
define( 'DB_NAME', 'figma-to-wordpress-3135396987' );
define( 'DB_USER', 'figma-to-wordpress-3135396987' );
define( 'DB_PASSWORD', 'byuov2vfum' );
define( 'DB_HOST', 'shareddb-y.hosting.stackcp.net' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

define('AUTH_KEY',         'xR1Y2Z3A4b5C6d7E8f9G0hJkLmNpQrStUvWxYzA');
define('SECURE_AUTH_KEY',  'TuVwXyZ1A2B3C4D5E6F7G8H9J0KLMNpQrStUvWx');
define('LOGGED_IN_KEY',    'StUvWxYz12345678ABCDEFGHIJKLMNOPQrStUvW');
define('NONCE_KEY',        'QrStUvWxYz1234567890ABCDEFGHIJKLMnOpQrS');
define('AUTH_SALT',        'MnOpQrStUvWxYz123456789ABCDEFGHIjKlMnOp');
define('SECURE_AUTH_SALT', 'IjKlMnOpQrStUvWxYz123456789ABCDeFgHiJkL');
define('LOGGED_IN_SALT',   'EfGhIjKlMnOpQrStUvWxYz123456789AbCdEfGh');
define('NONCE_SALT',       'AbCdEfGhIjKlMnOpQrStUvWxYz1234567890ABC');

$table_prefix = 'wp_';
define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';