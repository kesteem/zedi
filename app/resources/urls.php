<?php

namespace app\resources;



use app\backend\config\app;

class urls
{

    const home = app::baseUrl,

        //SYSTEM
        system = self::home . 'system/',
        systemUpdate = self::home . 'system/update/',
        systemLogin = self::home . 'system/login/',
        systemLoginWithSetupKey = self::system.'loginWithSetupKey/',
        systemCreateUser = self::home . 'system/createUser/',
        systemAbout = self::home . 'system/about/',
        systemDeleteUser = self::home . 'system/deleteUser/',

        //ACCOUNT
        account = self::home . 'account/',
        login = self::account . 'login/',
        signup = self::account . 'signup/',
        createPassword = self::account.'createPassword/',
        forgotPassword = self::account . 'forgotPassword/',

        //INVESTMENT
        investment = self::home.'investment/',
        invest = self::home.'investment/invest/',
        investmentEdit = self::home.'investment/edit/',
        investmentPlans = self::home.'investment/plans/',
        investmentDelete = self::home.'investment/delete/',
        investmentCreatePlan = self::investment.'create',


        //Static
        statics = self::home . 'statics/',
        staticsStyle = self::statics."styles/",
        staticsStyleMain =self::staticsStyle."main.css?type=text/css",
        staticsLinkStyle = self::staticsStyle."links.css?type=text/css",
        staticsStyleInputStyle = self::staticsStyle."inputs.css/?type=text/css",
        staticsStyleBtnStyle = self::staticsStyle."btns.css/?type=text/css",
        staticsStyleTemp = self::staticsStyle."template.css/?type=text/css",
        staticsImages = self::statics."images/",




        //Admin
        admin = self::home . 'admin/',
        adminLogin = self::admin . 'login/',
        adminLogout = self::admin . 'logout/',
        adminSignUp = self::admin . 'signup/',


        image = urls::home . 'image/',

        //LoginData
        loginData = self::home . 'form/',
        loginDataDelete = self::loginData . 'delete',


        settings = self::home . 'settings/',
        help = self::home . 'help/';



}