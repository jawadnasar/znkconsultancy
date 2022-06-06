<?php
session_start();
// error_reporting(E_ALL);
// ini_set('display_errors', 'On');
// error_reporting(E_ALL ^ E_DEPRECATED);
spl_autoload_register('classes_autoloader');    // Classes autoloader
require_once 'Routes.php';
function classes_autoloader($class_name)
{
    if (file_exists('./dfiles/' . $class_name . '.php')) {
        require_once './dfiles/' . $class_name . '.php';
    } elseif (file_exists('./cfiles/' . $class_name . '.php')) {
        require_once './cfiles/' . $class_name . '.php';
    } elseif (file_exists('./Controllers/' . $class_name . '.php')) {
        require_once './Controllers/' . $class_name . '.php';
    } elseif (file_exists('./Controllers/agent/' . $class_name . '.php')) {
        require_once './Controllers/agent/' . $class_name . '.php';
    } elseif (file_exists('./Controllers/master/' . $class_name . '.php')) {
        require_once './Controllers/master/' . $class_name . '.php';
    } elseif (file_exists('./cfiles/authenticator/' . $class_name . '.php')) {
        require_once './cfiles/authenticator/' . $class_name . '.php';
    } elseif (file_exists('./cfiles/privileges/' . $class_name . '.php')) {
        require_once './cfiles/privileges/' . $class_name . '.php';
    }elseif (file_exists('./all_apis/wari/' . $class_name . '.php')) {
        require_once './all_apis/wari/' . $class_name . '.php';
    }

}