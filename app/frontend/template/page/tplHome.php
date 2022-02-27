<?php


use app\resources\urls;

function mission($iconName = "icn icn-checkmark-outline ", $description=" Choose from the world list of experts in variety of topics", $topic="Get access to the world best"){

    return "<div style='display: inline-block;  max-width: 150px'>
                     <div class='$iconName margin5' style='
                     font-size: 25px;
      background: linear-gradient(254.81deg, #D5569A 8.13%, #29009F 92.46%);
    -webkit-text-fill-color: transparent;
     -webkit-background-clip: text;'></div>
                    
                     <div class='margin5' style='font-weight: bold;font-size: 15px;'>$topic</div>
                      <div class='margin5' style='font-size: 15px;'>
                     $description
                      </div>
             </div>";


}



function services($title, $info){

    return "<div style='
z-index: 7;
background-color: #fff;
width: 33.33%; 
margin: 0 10px;
left: 789px;
top: 0px;
border-radius: 8px;
padding: 24px;
'>
  
        <div class='' style='
        background-color: #C42D69;
        padding: 10px; 
        display: inline-block;
        border-radius: 8px;
        margin: 0 0 0 0; 
         '>
             <div class='icn icn-input-checked' 
             style=' font-size: 30px; color: #fff'></div>
 
        </div>
        <div>
                 <div style='font-weight: bolder; margin:8px 0'>
                    $title
                </div>
        
                <div>
                    $info
                </div>
        </div>
       

        </div>";
}


function designs(){

    return "  <div style='height: 448px;
            flex-grow: 0; 
            flex-shrink:0;
              border-radius:8px;
           margin-right:8px;  width:448px; 
           background-color: #808080'>
           </div>";
}



function caseStudies($title,$description,$image){

    $image = empty($image)?"":"<div style='width: 100%; 
  
 height: 250px;
  background-color: #808080;
 background-position:center;
 background-size:cover;
 
  background-image: url(".urls::staticsImages.$image.")'>
</div><br>";



    return"<div style='display: inline-block;
padding: 8px;
 width: 380px;'>

$image
<h1>$title</h1>
<div>$description</div>
<br>
<a>Read More 
<span class='icn icn-cheveron-right'></span></a>




</div>";

}




