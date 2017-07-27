<?php
require('classes/errorHandler.php');
//require('classes/page.php');
global $errorHandler;
$errorHandler = new eH();
set_error_handler(array($errorHandler, 'errorHandle'));
set_exception_handler(array($errorHandler, 'exceptionHandle'));

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});
