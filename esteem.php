<?php

spl_autoload_register();

use app\backend\config\app;
use app\backend\controllers\error\pcError;
use app\backend\lib\request;

try {

    try {

        include_once 'app/backend/core/functions.php';

        $arr = explode('/', $_SERVER['PHP_SELF']);
        $filename1 = end($arr);
        $filename = implode('/', $arr);
        $path = preg_replace('@' . $filename1 . '@', '', $filename);
        $domainName = request::getScheme().'://'. request::getDomainName();
        $baseUrl = $domainName .$path;
        $errorType = $errorMessage = '';
        $app = new \app\backend\core\app();
        $app->run($baseUrl);
        exit;
    } catch (Error $error) {

        $errorType = 'Error';
        $errorMessage = $error;
    }

} catch (Exception $exception) {

    $errorType = 'Exception';
    $errorMessage = $exception;

}

try {

    if (app::logError) error_log($errorMessage);
    $errorType = empty(trim($errorType)) ? (app::errorDisplay? $errorType : 'Unknown error') : 'Unknown error';
    $errorController = new pcError();
    $errorController->handle($errorType, $errorMessage, 500, []);

} catch (Exception $exception) {

    http_response_code(500);
    die((app::errorDisplay? $exception : ''));
}
