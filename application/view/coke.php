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
                <li class="nav-item">
                  <a id="navAbout" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">About</a>
                </li>

        

                  <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Models
                       </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="assignment\application\view\coke.html">Coke</a>
                            <a class="dropdown-item" href="#">Fanta</a>
                            <a class="dropdown-item" href="#">Costa</a>
                            </div>
                     </li>

                     <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       About
                       </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a id="navDownload" class="dropdown-item nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">Download</a>
                            <a id="about" class="dropdown-item" href="#">Satement</a>
                            <a class="dropdown-item" href="#">Info</a>
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
            <div class="col-sm-12">
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

          

          </div>
          
          <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <a href="https://www.qries.com/">
                  <img src="application\assets\images\site_images\card_coke.png" class="d-block w-100" alt="coke">
                </a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="..." class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="..." class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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
      Lorem ipsum..
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
      Lorem ipsum..
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
      Lorem ipsum..
    </div>
  </div>
</div>

</div>
            

        

        

</div> <!-- End 3D App SPA Contents -->
    

 
    <nav id="footerColor" class="navbar navbar-expand-sm footer">
        <div class="container-fluid">   
            <div class="navbar-text float-left copyright">
                <p><span class="align-baseline">&copy Github link: https://github.com/ZHENBOLIN/WEB3D_ZHENBO-LIN_231022.git | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
            </div>
            
        </div>
    </nav> 


  
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="application\view\js\popper.min.js"></script>
    <script src="application\view\js\bootstrap.js"></script>
    <script>
      $(document).ready(function(){
        $('[data-toggle="popover"]').popover();   
      });
      </script>

    <!-- JavaScript to swap for SPA and restyle -->
    <script src="application\view\js\swap_restyle.js"></script>

  </body>
</html>