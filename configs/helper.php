<?php

if(!function_exists('debug')) {
    function debug($data)
    {
        echo '<pre>';
        print_r($data);
        die;
    }
}

if(!function_exists('upload_file')) {
    function upload_file($folder, $file)
    {
        $tagetFile = $folder . '/' . time() . '-' . $file["name"];

        if(move_uploaded_file($file["tmp_name"], ASSETS_UPLOADS . $tagetFile)) {
            return $tagetFile;
        }
        throw new Exception('Upload file that baij');
    }
}