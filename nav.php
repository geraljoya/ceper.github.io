<!DOCTYPE html>
<html lang="en">
   <head>
      
       <title>Menú de navegación</title>
       
       <!-- Required meta tags -->
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta author="Geraldine Joya Prieto">
       <meta descrition="">
       <meta keywords="">

       <!-- Google fonts -->
       <link href="https://fonts.googleapis.com/css?family=Roboto|Squada+One" rel="stylesheet">
        
        <!-- Fontello -->
       <link rel="stylesheet" href="css/fontello.css">
       
       <!-- CSS -->
       <link rel="stylesheet" href="css/bootstrap.css">
       <link rel="stylesheet" href="css/normalize.css">
       <link rel="stylesheet" href="css/style-nav.css">
       
       <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
       
       <script type="text/javascript">
           $(document).ready(function()
           {
               $(".menu-icon").click(function()
               {
                   $(".menu-icon").toggleClass("active")
               })
               
               $(".menu-icon").click(function()
               {
                   $(".sidebar").toggleClass("active")
               })
           })
       </script>
       
    </head>
    
    <body>
        <div class="barra-fija squada">
             <a href="index.php"><img src="img/logo.png" alt="Ir a inicio CEPER" class="col mt-4"></a>
             <div class="menu-icon">
                <span class="bg-amarillo"></span>
                <span class="bg-verde-o"></span>
                <span class="bg-verde-c"></span>
            </div>
            <ul class="iconos-sociales">
                <li><a href="https://es-la.facebook.com/Perfeceper/" target="_blank"><span class="icon-facebook-squared"></span></a></li>
                <li><a href="https://www.instagram.com/perfeceper/" target="_blank"><span class="icon-instagram-filled"></span></a></li>
                <li><a href="https://www.youtube.com/channel/UC-OnfGWFvEFR_fKos5Vjfzg" target="_blank"><span class="icon-youtube-play"></span></a></li>
                <li><a href="https://twitter.com/Perfeceper" target="_blank"><span class="icon-twitter-squared"></span></a></li>
            </ul>
       </div>
        
        <div class="sidebar squada">
           <ul class="menu">
               <li class="text-center mt-5 mb-2 pt-2 pb-2 bg-blanco"><a href="vista-ingreso.php" class="verde-o"><span class="icon-user blanco bg-amarillo" style="border-radius: 45%; padding: 8px 4px;"></span>Ingreso</a></li>
               <li class="text-center mb-5 mb-2 pt-2 pb-2 bg-blanco"><a href="vista-registro.php" class="verde-o"><span class="icon-pencil blanco bg-verde-c" style="border-radius: 45%; padding: 8px 4px;"></span>Inscripción</a></li>
               
               <li class="mt-5"><a href="index.php" class="blanco"><span class="icon-home"></span>Inicio</a></li>
               <li class="mt-5"><a href="metodologia.php" class="blanco"><span class="icon-th-large"></span>Metodología</a></li>
               <li class="mt-5"><a href="nosotros.php" class="blanco"><span class="icon-briefcase"></span>Nosotros</a></li>
               <li class="mt-5"><a href="contacto.php" class="blanco"><span class="icon-comment"></span>Contacto</a></li>
           </ul> 
       </div>
    </body>
    
</html>