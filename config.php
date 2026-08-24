<?php
define('SITE_URL', 'https://angelajholden.com/');

// Determine the base URL dynamically
if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    define('BASE_URL', '/portfolio/'); // Local development (MAMP)
} else {
    define('BASE_URL', '/'); // Production (Heroku)
}
?>
