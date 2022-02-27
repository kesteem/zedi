<?php

namespace app\backend\config;

use app\resources\urls;

class web
{

    const web_main_layout_width = '650px';

   const absoluteUrl = [

       '*'=>[
           '<meta name="viewport" content="width=device-width initial-scale=1">',
        '<link rel="icon" href="'. app::icon.'" type="image/favi">',
           '<link rel="stylesheet" href="/pub/icon_moon/style.css" type="text/css">',
          '<link rel="stylesheet" href="'. urls::staticsLinkStyle.'" type="text/css">',
         '<link rel="stylesheet" href="'. urls::staticsStyleTemp.'" type="text/css">',
         '<link rel="stylesheet" href="'. urls::staticsStyleBtnStyle.'" type="text/css">',
         '<link rel="stylesheet" href="'. urls::staticsStyleInputStyle.'" type="text/css">',
                  '<link rel="stylesheet" href="'. urls::staticsStyleMain.'" type="text/css">'
        ]
    ];



}