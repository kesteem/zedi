<?php


namespace app\backend\controllers\home;

use app\backend\config\app;
use app\backend\core\web_view;
use app\backend\lib\time;
use app\resources\urls;
use app\backend\web_view_components\template\header;

class Vhome  extends web_view
{

 function index(){

include_once "app/frontend/template/page/tplHome.php";

 echo $this->setTohead('<link rel="stylesheet"  href="'.urls::staticsStyle.'homepage.css?type=text/css'.'" type="text/css">')
    ->setTitle('Zedi')
     ->setBodyAttr("class='home'")
 ->renderWeb("
<div style=' position: relative; padding: 20px; background: linear-gradient(254.81deg, #D5569A 8.13%, #29009F 92.46%);'>

        <div class='containerContent' style=' min-height: 500px; margin: auto'>
             
                <header>
               <nav style='display: flex; align-items: center; justify-content: space-between'>
                      <img src='" .app::icon. "' width='30px'>
                      
                        <ul id='navLeft' style='color: #fff'>
                            <li>About</li>
                             <li>Works</li>
                              <li>Freelance</li>
                        </ul>  
                        
                        <a style='background-color: #00f;text-align: center;
                        color: #fff; font-weight: lighter;
                        border-radius:5px;  padding: 3px 5px'>
                                Let Talks!
                         </a>
               
                </nav>
               
                </header>
                
                
                
                <div style='color:#fff;position: absolute;top: 50%; transform: translateY(-40%)'>
                
                        <h1 style='color: #fff;width: 50%; font-weight:bolder; font-size: 25px'> 
                        Lorem ipsum dolor sit amet, consectetur  laudantium nesciunt non possimus
                        </h1>
                        <br>
                    <div style='font-weight: lighter'>Reach farther than you can imagin</div>
                    <br>
                    <a style='background-color: #f01f7a;font-size:15px; 
                    font-weight: lighter; color: #fff; border-radius: 5px;
                     padding: 3px 5px;'>
                    Start Here <span class='icn icn-arrow-right1'></span>
                    </a>
                </div>
                
                <div class='custom-shape-divider-bottom-1645567857'>
                    <svg data-name='Layer 1' xmlns='http://www.w3.org/2000/svg'
                     // viewBox='0 0 1200 120' preserveAspectRatio='none'>
                        <path d='M985.66,92.83C906.67,72,823.78,31,743.84,
                        14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,
                        11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z' 
                     class='shape-fill'></path>
                    </svg>
                </div>
        
        </div>



</div>
"
     .
"
<section style='background-color: #fff' class=''>

        <div class='containerContent'>
        
         <h1 class='h1Gadiant'>
     Our Mission
     </h1>
     <article>
     Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci aperiam aut doloribus eaque, eos esse explicabo libero molestiae nam nobis odit quaerat ratione recusandae reprehenderit sint velit! Eos, sit.
    </article>
     <br>
     <br>
             <div style='display: flex; justify-content: space-between; flex-wrap: wrap'>
             "
             .mission()
             .mission('icn icn-star-outline')
             .mission('icn icn-clock')
         . "
                     
           </div>
      </div>

</section>
"
.
     '<section id="services">

<br>
    <div class="containerContent" style="z-index: 3; background-color: transparent">
        <h1 class="h1Gadiant title">Our Services</h1>
        <div style="display: flex; margin-top: 68px">
        '
     .services('Digital Services',"Our understanding of how digital platforms work helps us to harness creativity and strategy to push brands beyond their imagination, bringing value to the mix.").
     services('Digital Services',"Our understanding of how digital platforms work helps us to harness creativity and strategy to push brands beyond their imagination, bringing value to the mix.").
     services('Digital Services',"Our understanding of how digital platforms work helps us to harness creativity and strategy to push brands beyond their imagination, bringing value to the mix.").
     '
        
        </div>
    
    
    </div>

    <svg   viewBox="0 0 1440 1128" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M4062 -30.8873C4062 -1220.11 688.849 849.18 -897 -30.8877L-897 1128H4062V-30.8873Z" fill="url(#paint0_linear_22_394)"/>
    <defs>
    <linearGradient id="paint0_linear_22_394" x1="1582.5" y1="-410" x2="1582.5" y2="1128" gradientUnits="userSpaceOnUse">
    <stop stop-color="#D4C5FF"/>
    <stop offset="1" stop-color="#F0EAFF" stop-opacity="0"/>
    </linearGradient>
    </defs>
    </svg>

            
</section>'




     ."
     <section id='designs'>
     
     <div class='containerContent'>
               <h1 class='h1Gadiant title'>Designs</h1>
                <div style='display: flex; justify-content: space-between; align-items: center'>
                    <div style=' width: calc( 100% - 220px )'>Lorem ipsum dolor sit amet, consectetur 
                    adipisicing elit. A alias aspernatur at aut consequatur
                    dolorem eos eum excepturi facilis illum minus
                    omnis quae quod rerum, sunt ullam ut veritatis
                    voluptates.
                    </div>
                
                    <a style='background-color: #612FF1;font-size:15px; 
                    font-weight: lighter; color: #fff; border-radius: 5px;
                    padding: 3px 5px;'>
                    See All Designs
                    </a>
                </div>
     
    </div>
   
  
    <div style='display: flex; overflow-x: scroll; margin-top: 61px'>
   "
   .designs().
     designs().
     designs().
     designs().
     designs().
     " </div>    
           
     </section>
     "



     ."
     <section id='caseStudies' style='color: #fff;'>
     
     <div class='containerContent'>
       <h1 class='title' >Case Studies / Projects</h1>
   
   
       <div style='display: flex; align-items: end; justify-content: space-between'>
       
             <div style='max-width: calc( 100% - 200px ); color: #fff; margin-top: 24px; font-weight: lighter'>
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam autem 
             et ex nemo officia quidem, similique voluptatum! Amet cumque, nam.
             </div>
             
             <a style=' background-color: #E64485; border-radius: 8px; padding: 10px 16px;'>
             See All Case Studies
             </a>   
       
       
       </div>
    
    
    <div id='caseStudies' style='display: flex; justify-content: space-between'>
        <div>
     ".caseStudies("Case Study1","  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam autem 
             et ex nemo officia quidem, similique voluptatum! Amet cumque, nam.
            ",'caseImg.png')
     . "
     
        </div>

        <div>
     
     
     ".caseStudies("Case Study1","  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam autem 
             et ex nemo officia quidem, similique voluptatum! Amet cumque, nam.
            ",'')

     .caseStudies("Case Study1","  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam autem 
             et ex nemo officia quidem, similique voluptatum! Amet cumque, nam.
     ",'')
    . "
     
        </div>

          <div>
    
     ".caseStudies("Case Study1","  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam autem 
             et ex nemo officia quidem, similique voluptatum! Amet cumque, nam.
            ",'')

     .caseStudies("Case Study1","  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam autem 
             et ex nemo officia quidem, similique voluptatum! Amet cumque, nam.
     ",'')
     . "
     
        </div>
     
    </div>
   
</div>
    


</section>
    "



     ."
     <section id='sponsor'>
    
<div class='containerContent' style='min-height: 200px'>

<img style=' display: block;
 width: 100%' src='".urls::staticsImages."sponsores.png'>



</div>     
     
     




</section>
    "



     .'<footer style="background-color: #1F0076; min-height: 200px;">

                <div class="containerContent" style="display: flex; align-items: flex-end; color: #fff">
               
                           <div>
                                <img src="'.app::icon.'" width="60px">
                                <div style="font-size: 15px; font-weight: lighter">&copy; '.time::getYear().'-Zedi Limited</div>
                           
                           </div>
                           
                           <ul style="margin: 0 150px; text-decoration: none">
                            
                             <li>About</li>
                             <li>Case Studies</li>
                              <li>Freelance</li>
                            </ul>
                </div>
</footer>'



 );

}




}