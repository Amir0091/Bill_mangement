<?php
spl_autoload_register("Loader");

function Loader($className){


    $path = '../classes/';
    $ext = '.class.php';
    $fullpath = $path.$className.$ext;

    if (!file_exists($fullpath)) {
        $path = 'classes/';
        $fullpath = $path.$className.$ext;
    }
    include_once $fullpath;


}
