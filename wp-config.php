<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jyotirbi_my7blog');

/** MySQL database username */
define('DB_USER', 'jyotirbi_my7blog');

/** MySQL database password */
define('DB_PASSWORD', 'SP!4(5z3Ik');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'm2sh9j0m0dqaptqr9lm8e71npkkpo55xgr4p3hbrvadlqox9gh9sbjlcl4ujdvbs');
define('SECURE_AUTH_KEY',  '5gtyavnk5z8cazrfxyy6cpxxulfjujeuwhliazd5qjnambd1s8qqpm6eefp7twxd');
define('LOGGED_IN_KEY',    'afjgv5jkg5m65c0euvowpsyowwkprafcnavpka7jfrz8wsuol3fruvchbcf2vj4i');
define('NONCE_KEY',        'gmj9wjbqyfywifxpiqjtncjbmkz3vva8w4kbuwnyld3pf4hjombjwrknqia2ykhg');
define('AUTH_SALT',        'xqsr12jnskzamysfamouanah9h5hkeluj5hdudiqrwxdvqen5yufb7xabel8wokg');
define('SECURE_AUTH_SALT', 'menns8mqzjhyutafbferdqmp0czxev7ttemle2qz0bz85cclj8kvefqkkmfai4nf');
define('LOGGED_IN_SALT',   'weqst3iqykyazrr1frjawnmatzzf8ugk5otbgb1ucuywrsqb1bumiohducnuv6gb');
define('NONCE_SALT',       'mkzb3b746tzlt0tmiqu6n3wpzgybosbitnhpcy53h9cqnb8yobchazsilt77gpbo');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
