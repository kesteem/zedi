<?php

namespace app\backend\core;


use app\backend\config\services;
use app\backend\controllers\error\pcError;
use app\backend\core\services\system;
use app\backend\lib\request;
use Exception;

class app
{
    static
       $config = null;
private  $errorController;
    static function getConfig($name = null) {
    
    
    if(empty($name) )
    {
        return self::$config;
    }else{
        
    return isset(self::$config->$name)?self::$config->$name:null;    
    }
    
    
}
       
function run($baseUrl){
$this->errorController = new pcError();
        $this->bootstrap($baseUrl);
        $controller = request::getUrlController();
        $action = request::getUrlAction()=='/'?'index':request::getUrlAction();
        system::handle();
        if (strtolower($controller) == 'system'){

            $namespace = "app\\backend\\core\\controller\\System";
            call_user_func_array([new $namespace,$action],[]);
        }else{
            $this->controllerServices();
            $controller = $controller=='/'?'home':$controller;
            $this->controllers($controller,$action);
        }

    }


    function bootstrap($baseUrl){

        set_error_handler((function($eNo,$info,$eFile,$eLine){

            throw new Exception($info.$eFile.' on line '. $eLine);
        }),E_ALL);

        bootstrap::settings();
        bootstrap::appFile();
        bootstrap::url($baseUrl);
        session_start();
        ob_start();
    }


    function controllerServices(){

        $servicesToController =  services::controller[request::getUrlController()]??[];
        $globalServices = services::controller['*']??[];
        if (!empty($globalServices)){

                foreach ($globalServices as $globalService){

                    if (class_exists($globalService)){

                        $obj = new $globalService();
                        call_user_func_array([$obj,'handle'],[]);
                    }elseif (is_file($globalService) and file_exists($globalService)){

                        include $globalService;
                    }
                }
        }

    if (empty($servicesToController)) return;

    $runInAllAction = $servicesToController['*']??[];

        if (!empty($runInAllAction)){
            foreach ($runInAllAction as $service){

                if (class_exists($service)){

                    $obj = new $service();
                    call_user_func_array([$obj,'handle'],[]);
                }elseif (is_file($service) and file_exists($service)){

                    include $service;
                }
            }
        }
     unset($servicesToController['*']);
     if (empty($servicesToController)) return;

     foreach ($servicesToController as $controllerName=>$value){

         $arr = explode(' ',$controllerName);
         if (in_array(request::getUrlAction(),$arr)){

             $c = count($value);
             $i = 0;
            for (; $i < $c;$i++){

                $value[$i]::handle();
            }
         }
     }
}

     function controllers($controllerClassName, $action)
     {

         $controllerFolder = \app\backend\config\app::controllerDir.$controllerClassName;
         $fL = strtoupper($controllerClassName[0]);
         $controllerClassName[0] = $fL;
         $classNamespace = $controllerFolder.'\\'.$controllerClassName;
         if (!class_exists($classNamespace)){

             $this->errorController->handle('Page Not Found',"Page you're looking for not available",404,[]);
         }elseif (!method_exists(new $classNamespace,$action) and $classNamespace::$dynamic){

             new $classNamespace();
         }else if (!method_exists(new $classNamespace,$action)){

             $this->errorController->handle('Page Not Found',"Page you're looking for not available",404,[]);

         }else {

             call_user_func_array([new $classNamespace, $action], []);
         }

     }

}