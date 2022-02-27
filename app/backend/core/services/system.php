<?php

namespace app\backend\core\services;



use app\backend\core\dispatcher;
use app\backend\core\model\system\m_system;
use app\backend\objects\user;

class system
{
   static function handle(){

        $system = new m_system();
        if ($system->isLogin()){

            dispatcher::setUserData('systemAdmin',true);
            user::$systemAdmin = true;
        }else{

            user::$admin = false;
        }
    }
}