<?php

namespace app\backend\config;

class app
{
    const  name = 'appName',
        httpsOnly = false,
        domain = 'localhost',
        baseUrl ='http://'.self::domain.'/zedi/',
        icon = self::baseUrl.'icon.png',
        enableJsonErrorLog = true,
        logError = false,
        deveMode = true,
        controllerDir = "app".DIRECTORY_SEPARATOR."backend".DIRECTORY_SEPARATOR."controllers\\",
        publicControllerPrefix = 'c',
        emailEnable = false,
        errorLog = 'log.txt',
        errorDisplay = true,
        jsonErrorFilename = 'logs.json';
}