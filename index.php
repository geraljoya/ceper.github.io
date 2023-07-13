<?php

include("cabecera.php");

session_start();

?>    
      
      <main>
         <div class="container-fluid">
          
            <div class="row d-block d-lg-none">
                <div class="barra12">
                    <nav style="position:fixed; z-index:50;">
                        <?php include("menu.php");?>
                    </nav>
                </div>
            </div>
            
            <div class="pictures mt-5 col-12 col-lg-11 d-none d-lg-block">
                <div class="row no-gutters d-none d-lg-block">
                    <p class="lineas roboto mt-5 d-flex align-items-end">El centro de perfeccionamiento deportivo CEPER es un espacio creado para preparar y perfeccionar a jugadores de futbol en las diferentes etapas deportivas, desde lo formativo, competitivo y hasta el alto rendimiento; mejorando los aspectos motrices, técnicos, tácticos, físicos, cognitivos y las características de acuerdo a su posición.</p>
                </div>
            </div>
            
            <div class="row d-block d-lg-none">
                <div class="bg-blanco mt-5">
                    <img src="img/imagen-ceper.png" alt="" class="col-12">
                    <p class="pt-3 pb-3 text-center col-12">El centro de perfeccionamiento deportivo CEPER es un espacio creado para preparar y perfeccionar a jugadores de futbol en las diferentes etapas deportivas, desde lo formativo, competitivo y hasta el alto rendimiento; mejorando los aspectos motrices, técnicos, tácticos, físicos, cognitivos y las características de acuerdo a su posición.</p>
                </div>
            </div>
            
            <div class="row no-gutters">
                <div class="spot mt-5">
                    <video controls preload class="col-12 col-lg-11">
                        <source src="video/spot-publicitario.mp4" type="video/mp4">
                        <source src="video/spot-publicitario.ogv" type="video/ogv">
                        <source src="video/spot-publicitario.webm" type="video/webm">
                    </video>
                </div>
            </div>
            
            <div class="row no-gutters">
                <div class="slogan bg-blanco mt-5 col-12 col-lg-11 text-center">
                    <h2 class="squada gris"><img src="img/comillas-y.png" width="70">Idealiza tus metas, aquí las entrenamos<img src="img/comillas-g.png" width="70"></h2>
                </div>
            </div>
            
            <div class="row no-gutters">
                <div class="gallery mt-5 col-12 col-lg-11">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                     
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-amarillo"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-verde-o"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-verde-c"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3" class="bg-amarillo"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4" class="bg-verde-o"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5" class="bg-verde-c"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="6" class="bg-amarillo"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="7" class="bg-verde-o"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="8" class="bg-verde-c"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="9" class="bg-amarillo"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="10" class="bg-verde-o"></li>
                      </ol>
                      
                      <div class="carousel-inner" role="listbox">
                       
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="img/gallery-1.jpg">
                        </div>
                        
                        <div class="carousel-item">
                          <img class="d-block w-100" src="img/gallery-2.jpg">
                        </div>
                        
                        <div class="carousel-item">
                          <img class="d-block w-100" src="img/gallery-3.jpg">
                        </div>
                        
                        <div class="carousel-item">
                          <img class="d-block w-100" src="img/gallery-4.jpg">
                        </div>
                        
                        <div class="carousel-item">
                          <img class="d-block w-100" src="img/gallery-5.jpg">
                        </div>
                        
                        <div class="carousel-item">
                          <img class="d-block w-100" src="img/gallery-6.jpg">
                        </div>
                        
                        <div class="carousel-item">
                          <img class="d-block w-100" src="img/gallery-7.jpg">
                        </div>
                        
                        <div class="carousel-item">
                          <img class="d-block w-100" src="img/gallery-8.jpg">
                        </div>
                        
                        <div class="carousel-item">
                          <img class="d-block w-100" src="img/gallery-9.jpg">
                        </div>
                        
                        <div class="carousel-item">
                          <img class="d-block w-100" src="img/gallery-10.jpg">
                        </div>
                        
                      </div>
                      
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                      
                      </div>
                </div>
            </div>
            
            <div class="row mt-5 mb-5 d-flex align-items-center no-gutters">
                <div class="ppe col-2 d-none d-lg-block">
                    <img src="img/ppe1.png" alt="arqueros" width="100%">
                </div>
                <div class="col-12 col-lg-7 d-inline-block text-center bg-gris no-gutters">
                    <img src="img/ppe.png" class="mt-3 mb-3" width="150px">
                </div>
                <div class="ppe col-2 d-none d-lg-block no-gutters">
                    <img src="img/ppe2.png" alt="circuitos" width="100%">
                </div>
            </div>
        </div>   
      </main>
      
      <header class="container-fluid d-none d-lg-block">
          <nav><?php include("nav.php");?></nav>
      </header>
      
      <?php

        include("footer.php");

      ?>