<?php
date_default_timezone_set('America/Costa_Rica');

class ErrorLog
{

    static function activateErrorLog()
    {
        error_reporting(E_ALL);
        ini_set('ignore_repeated_errors', TRUE);
        ini_set('display_errors', FALSE);
        ini_set('log_errors', TRUE);
        ini_set('error_log', dirname(__DIR__) . '/logs/php-error.log');

        // ini_set("display_errors", 1);
        // ini_set("log_errors", 1);
        // ini_set('error_log', dirname(__DIR__) . '/logs/php-error.log');
     
    }
}
