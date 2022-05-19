<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="application\view\css\bootstrap.css">
    <link rel="stylesheet" href="application\view\css\bootstrap.min.css">
    <link rel="stylesheet" href="application\view\css\style.css">


    <script type='text/javascript' src='https://www.x3dom.org/download/x3dom.js'> </script>
        <link rel='stylesheet' type='text/css' href='https://www.x3dom.org/download/x3dom.css'/>
    

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="application\view\js\bootstrap.js"></script>
    <script src="application\view\js\bootstrap.min.js"></script>

    <title>Assignment-231022-ZHENBO LIN</title>

  </head>
  <body id="bodyColor">
    <!-- The 3D App header -->
    <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
    
          <!-- Brand -->
          <div class="logo">
            <a class="navbar-brand" href="#">
              <h1>1oca</h1>
              <h2>Cola</h2>
              <h3>Journey</h3>
              <p>Refreshing the world, one story at a time</p>
            </a>
          </div>

          <!-- Navbar Menu Icon -->
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="navbar-toggler-icon"></span>
          </button>
          
          <!-- link Menu Icon button to the links class navbar-collapse selector] -->
          <div class="collapse navbar-collapse">
              <!-- Links -->
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a id="navHome" class="nav-link active" href="#">Home</a>
                </li>
        

                  <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Models
                       </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a id="navGit" class="dropdown-item nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="Coke x3d" data-content="This model was built with blender.">Coke</a>
                            <a id="navGit" class="dropdown-item nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="Fanta x3d" data-content="This model was built with blender.">Fanta</a>
                            <a id="navGit" class="dropdown-item nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="Costa x3d" data-content="This model was built with blender.">Costa</a>
                            </div>
                     </li>

                     <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       About
                       </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a id="navGit" class="dropdown-item nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="Github Link" data-content="https://github.com/ZHENBOLIN/WEB3D_ZHENBO-LIN_231022.git">Download</a>
                            <a id="navDownload" class="dropdown-item nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="Statement of Originality" data-content="These web pages are submitted as part requirement for the degree of Games and Multimedia Environments at the University of Sussex.  They are the product of my own labour except where indicated in the web page content. These web pages or contents may be freely copied and distributed provided the source is acknowledged">Statement</a>
                            <a id="navGit" class="dropdown-item nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="Email address" data-content="zl317@sussex.ac.uk">Contact</a>
                            </div>
                     </li>

                 </ul>
           </div>
          


         
    </nav>

    <!-- This is the main contents of the page, it has a background image across 1 column, followed by three columns holding cards in a row for the 3 images and associated texts
    -->
    <div class="container-fluid">
  
          
          <div class="container main_contents">
    <div class="row"> <!-- Main_3D Image or Carousel -->
      <div class ="col-sm-12">
        <div id="main_3d_image">
            <div id="main_text" class="col-xs-12 col-sm-4">
              <h2>Coca Cola Great Britain</h2>
              <h3>Founded by Dr John S Pemberton</h3>
              <p>The Coca Cola Company is the world's leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands.</p>
            </div> 
        </div> 
      </div>
    </div>

          <!-- A row to hold three cards for the Coke, Sprite and Pepper contents -->

          <div class="row">
            <div class="col-sm-4">
              <div class="card">
                  <a href=""></a>
                    <img class="card-img-top img-fluid img-thumbnail" src="application\assets\images\site_images\card_coke.png" alt="Coke">
                  </a>
                  <div class="card-body">
                    <h3 class="card-title">Coke</h4>
                    <p class="card-text">Coca-Cola Original Taste is the world’s favourite soft drink and has been enjoyed since 1886.</p>
                    <a href="https://www.coca-cola.co.uk/brands/coca-cola-original-taste" class="btn btn-primary btn-responsive">Find out more ...</a>
                  </div>
              </div>
          </div>

          <div class="col-sm-4">
              <div class="card">
                  <a href=""></a>
                  <img class="card-img-top img-fluid img-thumbnail" src="application\assets\images\site_images\card_fanta.png" alt="Fanta">
                  </a>
                  <div class="card-body">
                    <h3 class="card-title">Fanta</h4>
                    <p class="card-text">Bright, bubbly, instantly refreshing and great tasting. Fanta Orange is made with 100% natural flavours, fruit juice and is caffeine free.</p>
                    <a href="https://www.coca-cola.co.uk/brands/fanta" class="btn btn-primary btn-responsive">Find out more ...</a>
                  </div>
              </div>
          </div>

          <div class="col-sm-4">
              <div class="card">
                  <a href=""></a>
                    <img class="card-img-top img-fluid img-thumbnail" src="application\assets\images\site_images\card_costa.png" alt="Costa">
                  </a>
                  <div class="card-body">
                    <h3 class="card-title">Costa</h4>
                    <p class="card-text">Our classic Americano has been expertly crafted by our Master of Coffee.  Made with less sugar to release the full flavour of our Signature Mocha Italia beans.</p>
                    <a href="https://www.coca-cola.co.uk/brands/costa-coffee" class="btn btn-primary btn-responsive">Find out more ...</a>
                  </div>
              </div>
              </div>

          </div>
          
          <div class="bd">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <a href="https://www.coca-cola.co.uk/brands/coca-cola-original-taste">
                  <img src="application\assets\images\render_images\coke_render.png" class="d-block w-100" alt="coke">
                </a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Rendering of Coke</h5>
                    <p>This model 'Coke bottel' was built with blender.</p>
                  </div>
                </div>
                <div class="carousel-item">
                
                  <a href="https://www.coca-cola.co.uk/brands/fanta">
                  <img src="application\assets\images\render_images\fanta_render.png" class="d-block w-100" alt="fanta">
                </a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Rendering of Fanta</h5>
                    <p>This model 'Fanta can' was built with blender.</p>
                  </div>
                </div>
                <div class="carousel-item">
                
                  <a href="https://www.coca-cola.co.uk/brands/costa-coffee">
                  <img src="application\assets\images\render_images\costa_render.png" class="d-block w-100" alt="costa">
                </a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Rendering of costa</h5>
                    <p>This model 'Costa cup' was built with blender..</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>   

          
      
 <div id="accordion">

    <div class="card">
  <div class="card-header">
    <a class="card-link" data-toggle="collapse" href="#collapseOne">
      coke_bottle.x3d
    </a>
  </div>
  <div id="collapseOne" class="collapse show" data-parent="#accordion">
    <div class="card-body">
    <div class="model3D">
    <x3d width="600" height="600">
    <scene DEF='scene'>
        <Viewpoint id="front" position="-0.07427 0.95329 -2.79608" orientation="-0.01451 0.99989 0.00319 3.15833" description="camera"></Viewpoint>
        <Viewpoint id="right" position="-2.43383 1.07351 -1.28700" orientation="-0.00318 -0.99950 -0.03159 2.06609" description="camera"></Viewpoint>
        <Viewpoint id="left" position="2.70190 1.05153 -0.57128" orientation="-0.08205 0.99612 -0.03175 1.73722" description="camera"></Viewpoint>
        <Viewpoint id="top" position="0.05087 3.78235 -1.75890" orientation="-0.00307 0.87466 0.48473 3.12040" description="camera"></Viewpoint>
        <Transform>
            <Inline url="3d_model_blender\coke\coke_bottle.x3d" nameSpaceName="MAIN" mapDEFToID="true"></Inline>
        </Transform>
    </scene>
</x3d>

                      
                  </div> 
                  <div class="row">
                  <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
                                <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                                <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                                <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
                                <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                                <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>                            
                          <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                          <a href="#" class="btn btn-primary btn-responsive" onclick="document.getElementById('right').setAttribute('set_bind','true');" style="border: none; background: transparent; display: block">Back</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                          <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                          <div class="card-text x3dCameraDescription drinksText">
                            <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the animation controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Animation</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dAnimationSubtitle drinksText">
                            <h3>Animation Options</h3>
                          </div>
                          <a href="#" class="btn btn-outline-light btn-responsive" onclick="spin();">RotX</a>
                          <a href="#" class="btn btn-outline-light btn-responsive">RotY</a>
                          <a href="#" class="btn btn-outline-light btn-responsive">RotZ</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                          <div class="card-text x3dAnimationDescription drinksText">
                              <p>These buttons select a range of X3D animation options</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the render type and lighting controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >Render</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Polygon</a>
                                <a class="dropdown-item" href="#" onclick="wireFrame();">Wireframe</a>
                                <a class="dropdown-item" href="#">Vertex</a>
                              </div>
                            </li>
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="headLight();">Default</a>
                                <a class="dropdown-item" href="#" onclick="omniLight();">Onmi On/Off</a>
                                <a class="dropdown-item" href="#" onclick="targetLight();">Target On/Off</a>
                                <a class="dropdown-item" href="#" onclick="lightSwitch('spot');">Headlight On/Off</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render and Lighting Options</h3>
                          </div>
                          <a href="#" class="btn btn-success btn-responsive">Poly</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="wireFrame();">Wire</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="headLight();">Headlight</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="document.getElementById('right').setAttribute('set_bind','true')">Default</a>

                          <div class="card-text x3dRenderDescription drinksText">
                              <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                          </div>
                        </div>
                      </div>
                </div>
                </div>


    </div>
  </div>
    </div>

<div class="card">
  <div class="card-header">
    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
    fanta_can.x3d
    </a>
  </div>
  <div id="collapseTwo" class="collapse" data-parent="#accordion">
    <div class="card-body">
    <div class="model3D">
                      <x3d>
                          <scene>
                              <inline url="3d_model_blender\fanta\fanta_can.x3d"> </inline>
                          </scene>
                      </x3d>
                  </div> 
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
      costa_cup.x3d
    </a>
  </div>
  <div id="collapseThree" class="collapse" data-parent="#accordion">
    <div class="card-body">
    <div class="model3D">
                      <x3d>
                          <scene>
                              <inline url="3d_model_blender\costa\costa_cup.x3d"> </inline>
                          </scene>
                      </x3d>
                  </div> 
    </div>
  </div>
</div>

</div>
          
       <!-- End home page contents-->

        <div id="about" style="display:none;">
            Insert About Contents
        </div>  

        <!-- This is the content for X3D models and 3D Image Gallery -->
        <div id="models" class="main_contents" style="display:none;">
          
            </div>

            

        

        

</div> <!-- End 3D App SPA Contents -->
    

   <!-- 页脚开始 -->  
    <nav id="footerColor" class="navbar navbar-expand-sm footer">
        <div class="container-fluid">   
            <div class="navbar-text float-left copyright">
                <p><span class="align-baseline">&copy 3dapp Assignment | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
            </div>
            <div class="navbar-text float-right social">
               
                <p>Github link: https://github.com/ZHENBOLIN/WEB3D_ZHENBO-LIN_231022.git</p>
            </div>
        </div>
    </nav> 
  <!-- 页脚结束 -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="application\view\js\popper.min.js"></script>
    <script src="application\view\js\bootstrap.js"></script>
    <script>
      $(document).ready(function(){
        $('[data-toggle="popover"]').popover();   
      });
      </script>
    
     <!-- JavaScript model interactions -->
     <script src="application/js/modelInteractions.js"></script>

    <!-- JavaScript to swap for SPA and restyle -->
    <script src="application\view\js\swap_restyle.js"></script>

    <script>
 function lightSwitch(id){
     var light = document.getElementById(id);
     if(light.getAttribute('on')!='TRUE')
        light.setAttribute('on','TRUE');
     else
         light.setAttribute('on','FALSE');
 }

 function headlight()
  {
       var h = document.getElementById("head");
      if(h.getAttribute('headlight')=='true')
        h.setAttribute('headlight', 'false');
      else
          h.setAttribute('headlight', 'true');
  }

</script>

  </body>
</html>