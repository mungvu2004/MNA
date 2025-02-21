<?php

define('BASE_URL', 'http://localhost/mna');
define('BASE_URL_ADMIN', 'http://localhost/mna/?mode=admin');

define('ROOT', __DIR__ . '/../');
define('VIEW_ADMIN', ROOT . 'views/admin/');
define('VIEW_CLIENT', ROOT . 'views/client/');

define('VIEW_ADMIN_MAIN', ROOT . 'views/client/main.php');
define('VIEW_CLIENT_MAIN', ROOT . 'views/client/main.php');


define('BASE_ASSETS_ADMIN', BASE_URL . 'assets/admin/');
define('BASE_ASSETS_CLIENT', BASE_URL . 'assets/client/');
define('BASE_ASSETS_UPLOADS', BASE_URL . 'assets/uploads/');

define('ASSETS_UPLOADS', ROOT . 'assets/uploads/');

define('CONTROLLER_ADMIN', ROOT . 'controllers/admin/');
define('CONTROLLER_CLIENT', ROOT . 'controllers/client/');

define('MODEL', ROOT . 'models/');

define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'mna_stort');
define('DB_OPTIONS', [
    PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);