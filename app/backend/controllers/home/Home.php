<?php


namespace app\backend\controllers\home;




use app\backend\core\controller;

class home extends controller
{

    function index(){

        $this->setHtmlView(Vhome::class,'index');
        $this->done();
    }
}