<?php

require_once CONTROLLER_CLIENT . '';

$action = $_GET['action'] ?? '/';

match($action) {
    // '/' => (new HomeController)->index(),
};