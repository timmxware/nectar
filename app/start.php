<?php

session_start();

// Root path for inclusion.
define('INC_ROOT', dirname(__DIR__));



// Get config
require_once INC_ROOT . '/config.inc.php';

// Require composer autoloader
require_once INC_ROOT . '/vendor/autoload.php';


// Require core files
require_once INC_ROOT . '/app/core/App.php';
require_once INC_ROOT . '/app/core/Controller.php';



//Root URL
define('HTTP_ROOT',
    'http://'.$_SERVER['HTTP_HOST'].
    str_replace(
        $_SERVER['DOCUMENT_ROOT'],
        '',
        str_replace('\\', '/', INC_ROOT).'/public'
    )
);

// Root path for assets
define('ASSET_ROOT',
    'http://'.$_SERVER['HTTP_HOST'].
    str_replace(
        $_SERVER['DOCUMENT_ROOT'],
        '',
        str_replace('\\', '/', INC_ROOT).'/public'
    )
);
