<?php
ini_set('display_errors', 0);
ini_set('log_errors', 1);
error_reporting(E_ALL);

function customErrorHandler($errno, $errstr, $errfile, $errline) {
    error_log("Error [$errno]: $errstr in $errfile on line $errline", 3, __DIR__ . "/logs/error.log");
    header("Location: /App/Views/error.php");
    exit();
}

function customExceptionHandler($exception) {
    error_log("Uncaught Exception: " . $exception->getMessage(), 3, __DIR__ . "/logs/error.log");
    header("Location: /App/Views/error.php");
    exit();
}

set_error_handler("customErrorHandler");
set_exception_handler("customExceptionHandler");
?>