<?php
session_start();
spl_autoload_register(function($class) {
    $fileName = "$class.php";
    
    $fileModel              = MODEL . $fileName;
    $fileControllerAdmin    = CONTROLLER_ADMIN . $fileName;
    $fileControllerClient   = CONTROLLER_CLIENT . $fileName;

    if(is_readable($fileModel)) {
        require_once $fileModel;
    } else if (is_readable($fileControllerClient)) {
        require_once $fileControllerClient;
    } else if (is_readable($fileControllerAdmin)) {
        require_once $fileControllerAdmin;
    }

});
require_once './configs/env.php';
require_once './configs/helper.php';

$mode = $_GET['mode'] ?? 'client';

if($mode == 'admin') {
    require_once './routers/admin.php';
} else {
    require_once './routers/client.php';
}