<?php

namespace app\backend\controllers\error;

use app\backend\core\controller;
class pcError extends controller
{

static $called = false;
  function  handle($errorTitle,$errorDescription,$httpStatusCode,  $others=[]){

      if (self::$called){

          (http_response_code($httpStatusCode));
          die;
      }
      self::$called = true;
      $this->setHtmlView(vError::class,'index');
      $this->setRequest('title',$errorTitle);
      $this->setRequest('description',(string) $errorDescription);
      $this->setRequest('httpStatusCode',$httpStatusCode);
      $this->done($httpStatusCode);
}

}