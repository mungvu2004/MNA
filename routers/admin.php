<?php

$action = $_GET['action'] ?? '/';

if(
    empty($_SESSION['user'])
    && !in_array($action, ['show-form-login', 'login'])
) {
    header('Location: ' . BASE_URL_ADMIN . '&action=show-form-admin');
    exit();
}

match($action) {
    '/' => (new DashboardController),

    'show-form-admin' => (new UserController),
    'login' => (new UserController),
    'logout' => (new UserController),


    'user-index' => (new UserController),
    'user-show' => (new UserController),
    'user-create' => (new UserController),
    'user-store' => (new UserController),
    'user-edit' => (new UserController),
    'user-update' => (new UserController),
    'user-delete' => (new UserController),

};