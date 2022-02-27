<?php

namespace app\backend\controllers\statics;

use app\backend\lib\request;

class Statics
{

    public function __construct()
    {

        $type = arrayGet($_GET,'type');
        $filePath ="app".DIRECTORY_SEPARATOR."resources". DIRECTORY_SEPARATOR."statics".DIRECTORY_SEPARATOR .request::getUrlAction().DIRECTORY_SEPARATOR.implode(DIRECTORY_SEPARATOR,request::getParams());
        $resCode = file_exists($filePath)?200:404;
        $fileCont = $resCode==200?file_get_contents($filePath):'';
        $mime = (empty($type) and $resCode==200)?mime_content_type($filePath):$type;
        http_response_code($resCode);
        header('content-type:'.$mime);
        echo $fileCont;
        exit;
    }

}