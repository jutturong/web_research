    <!DOCTYPE html>
    <html>

    <head lang="en">
       
        
       <?=$this->load->view("head_menu")?>

        
        
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
  
  
  
  

</head>


<body>
    <div class="page-content">
        <div class="bg-lightBlue fg-white align-center">
            <div class="container">
                <div class="no-overflow" style="padding-top: 40px">
                      
                                <!--  side show  -->
                                <?php  //$this->load->view("main_slide")?>
                                <?=$this->load->view($file1)?>


           
           
         <!--
                    <h1 style="font-size: 4.5rem; line-height: 1" class="text-shadow metro-title text-light">Metro UI CSS 3.0</h1>
                    <div class="padding30 sub-leader text-light">
                        The front-end framework for developing projects on the web in Windows Metro Style
                    </div>
                    <p class="" style="margin-top: 10px; padding: 0 50px">
                        Metro UI CSS developed with the advice of Microsoft to build the user interface and include: general styles, grid, layouts, typography, 20+ components, 300+ built-in icons.
                        Metro UI CSS build with {LESS}. Metro UI CSS is open source and has MIT licensing model.
                    </p>
                   
                    <div class="margin30 align-center leader">
                        The project is looking for sponsors!
                    </div>
          -->  
                    

                    <div class="margin60">
                        
                        
                        <div class="clear-float">
                            
                            
                           
                            
                            <!--
                            class="button big-button block-shadow success loading-pulse lighten"
                            class="button big-button block-shadow warning loading-cube lighten"
                            class="button big-button block-shadow info loading-cube lighten" 
                           class="button big-button block-shadow info loading-cube lighten" 
                            -->
                            
                            <a href="http://kkucleft.kku.ac.th/kkucleft/index.html" target="_blank"><button   class="button loading-cube lighten success block-shadow-success text-shadow big-button"  > <span class="icon mif-share"></span>  ศูนย์การดูแลฯ</button></a>
                            <a href="#"><button   class="button warning block-shadow-warning text-shadow big-button"  > <span class="icon mif-share"></span> ศูนย์วิจัยฯ</button></a>
                            <a href="http://www.tawanchai-foundation.org/"><button  class="button info block-shadow-info text-shadow big-button" > <span class="icon mif-share"></span> มูลนิธิฯ</button></a>
                            <a href="http://thaicleft.org/"><button  class="button bg-pink bg-active-darkPink fg-white big-button" > <span class="icon mif-share"></span>  สมาคมฯ ความพิการ</button></a>
                            
                            
                        
                        </div>
                        
                        
                        
                        <br />
                        <div class="align-center">
                            
                            <!--
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="8JQAAX78EMT4E">
                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                            -->
                            
                        </div>
                    </div>

                     
                     <!--
                    <small>
                        Currently v3.0.16
                        <br/>
                        <a class="fg-yellow" href="http://metroui.org.ua/v2/">Documentation for v2 can be found here</a>
                    </small>
                     -->
                     
                     

                    <div class="grid no-margin-bottom" style="margin-top: 100px" id="g1">
                        <div class="row cells3">
                            
                            
                            <!--
                            <div class="cell no-overflow" style="height: 85px">
                                <div class="bg-yellow fg-white block-shadow" style="height: 85px; padding-top: 20px; margin-top: 85px;">
                                    <h2 class="text-light">easy to use</h2>
                                </div>
                            </div>
                            <div class="cell no-overflow" style="height: 85px">
                                <div class="bg-green fg-white block-shadow" style="height: 85px; padding-top: 20px; margin-top: 85px;">
                                    <h2 class="text-light">less source</h2>
                                </div>
                            </div>
                            <div class="cell no-overflow" style="height: 85px">
                                <div class="bg-red fg-white block-shadow" style="height: 85px; padding-top: 20px; margin-top: 85px;">
                                    <h2 class="text-light">mit license</h2>
                                </div>
                            </div>
                            -->
                            
                            
                        </div>
                    </div>

                    <script>
                        $(function(){
                            setTimeout(function(){
                                $("#g1 .cell > div:eq(0)").animate({
                                    'margin-top': 0
                                }, 500, 'easeOutBounce');
                                $("#g1 .cell > div:eq(1)").animate({
                                    'margin-top': 0
                                }, 1000, 'easeOutBounce');
                                $("#g1 .cell > div:eq(2)").animate({
                                    'margin-top': 0
                                }, 1500, 'easeOutBounce');
                            }, 500);
                        });
                    </script>
                </div>
            </div>
        </div>

        <div class="fg-dark">
            <div class="container">
                
                
                <div class="padding80" style="padding-top: 40px">
                    <div class="">
                        <div class="grid">
                            <div class="row cells3">
                                <div class="cell no-phone">
                                    <div class="image-container bordered">
                                        <div class="frame">
                                            
                                            
                                            
                                          <!--   <img src="<?=base_url()?>images/whats-new.jpg"> -->
                                            
                                            <!--
                                            <img src="<?=base_url()?>images/globalspotlight.jpg">
                                            -->
                                            
                                            
                                            <!--
                                             <img src="<?=base_url()?>images/DSC_4244.JPG">
                                             <br>
                                             -->
                                             
                                             
                                             
                                             <!--
                                             <br>
                                             <img src="<?=base_url()?>images/IMG_4704.JPG">
                                             -->
                                             
                                             
                                              <br>
                                              <a href="<?=base_url()?>ebook1" target="_blank" >
                                             <img src="<?=base_url()?>images/ebook1.png">
                                              </a>
                                             
                                             <br>
                                             <img src="<?=base_url()?>images/DSC_8558.JPG">
                                             
                                             <!--
                                             <br>
                                             <img src="<?=base_url()?>images/DSC_4244.JPG">
                                            -->
                                            
                                            <!--
                                            <img src="picture/DSC_0269.JPG">
                                            -->
 
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="cell colspan2" style="padding-left: 20px">
                                    
                                  
                                    <!--
                                    <h1 class="">Whats new in 3.0</h1>
                                    <ol class="numeric-list square-marker">
                                        <li>compatible with <strong>Angular<span class="fg-red">JS</span></strong> and <strong>Require<span class="fg-red">JS</span></strong></li>
                                        <li>full code refactoring &amp; new components</li>
                                        <li>declarative approach to the definition of components</li>
                                        <li>framework itself monitors components, pressure via ajax</li>
                                        <li>create cool page without knowledge of javascript</li>
                                        <li>support classic approach to definition of components</li>
                                    </ol>
                                    <p class="no-display">
                                    The main feature in version 3 is: a declarative approach to the definition and initialization of components, and the framework itself monitors components, pressure via ajax. When a declarative definition of all component parameters are set via data-* attributes, including methods and events of the component. This approach allows to further separate html and javascript code. Now that would determine which component do not need to know javascript :). It is still possible to determine which component directly via javascript.
                                    </p>
                                    -->
                                    
                                    <!--<h1 class=""><?=$head_content1?></h1>-->
                                    
                                    <h1 class=""><?=$head_content1?></h1>
                                    
                                    
                                    <!--
                                    <ol class="numeric-list square-marker">
                                        
                                   
                                        <li>  <h5><strong>  <span class="fg-red"></span> </strong>  </h5>  </li>
                                   
                                        
                                     
                                        
                                    </ol>
                                    -->
                                    
                                    
                                        <?=$content1?>
                                    
                          
                                   
                                    
                                    

                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                       <!-- @@adsense -->
                    </div>


                    <br />
                    
                    <hr class="thin" />

                    
                    <!--   content  -->
                    <div>
                        
                        
                       
                        <!--
                        <h1 class="margin40">
                            Simple steps to create cool pages
                        </h1>
                        -->
                        
                        
                        <!--
                         <div class="carousel">
                                <a class="carousel-item" href="#one!"><img src="http://lorempixel.com/250/250/nature/1"></a>
                                <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/250/250/nature/2"></a>
                                <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/250/250/nature/3"></a>
                                <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/250/250/nature/4"></a>
                                <a class="carousel-item" href="#five!"><img src="http://lorempixel.com/250/250/nature/5"></a>
                        </div>
                        -->
                        
                        
                        <!-- เนื้อหา ข่าว -->
                        <ul class="step-list">
                                <?=$content2?>
                            
                              <!--
                            <li>
                                
                                <h4>Create page with HTML5 DOCTYPE</h4>
                                <h5>งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2559 (1)</h5>

                             
                                <pre class="prettyprint linenums no-phone no-scroll">
                                      
                                            <code>
                                             &lt;!DOCTYPE html&gt;
                                              1. Speech Correction for Children with Cleft Lip and Palate in Community: Kantharawichai Networking
                                           </code>
                                </pre>
                            
                                
                                
                                
                                 <span class="icon mif-share"></span>  
                                   Speech Correction for Children with Cleft Lip and Palate in Community: Kantharawichai Networking
                                 <button class="button loading-cube">Loading...</button>
                                 
                                 
                            </li>
                              -->
                            
                            
                            
                            <!--
                            <li>
                                <h4>Include required styles and libs</h4>
                                <pre class="prettyprint linenums no-phone no-scroll"><code>
                                    &lt;!DOCTYPE html&gt;
                                    &lt;html&gt;
                                    &lt;head&gt;
                                        &lt;link href="metro.css" rel="stylesheet"&gt;
                                        &lt;script src="jquery.js"&gt;&lt;/script&gt;
                                        &lt;script src="metro.js"&gt;&lt;/script&gt;
                                    &lt;/head&gt;
                                    &lt;/html&gt;
                                </code></pre>
                            </li>
                            <li>
                                <h4>Use declarative style to create components</h4>
                                <pre class="prettyprint linenums no-phone no-scroll"><code>
                                    &lt;!DOCTYPE html&gt;
                                    &lt;html&gt;
                                    &lt;head&gt;
                                        &lt;link href="metro.css" rel="stylesheet"&gt;
                                        &lt;script src="jquery.js"&gt;&lt;/script&gt;
                                        &lt;script src="metro.js"&gt;&lt;/script&gt;
                                    &lt;/head&gt;
                                    &lt;body&gt;
                                        &lt;h1&gt;Hello world!&lt;/h1&gt;
                                        &lt;div class="countdown" data-role="countdown" data-days="2"&gt;&lt;/div&gt;
                                    &lt;/body&gt;
                                    &lt;/html&gt;
                                </code></pre>
                            </li>
                            <li>
                                <h4>Enjoy the result</h4>
                                <div class="padding20 bg-grayLighter no-phone">
                                    <h1>Hello world!</h1>
                                    <div class="countdown" data-role="countdown" data-days="2"></div>
                                </div>
                            </li>
                            -->
                            
                            
                        </ul>
                        <!-- เนื้อหา ข่าว -->
                        
                        

                        
                        

   


                        
                        


                        
                        
                        
                        
                    </div>
                    
                    <!--   content  -->
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</body>
    </html>