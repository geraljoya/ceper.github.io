<!DOCTYPE html>
<html lang="en">
   <head>
      
       <title>CONTÁCTO</title>
       
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
       <link rel="stylesheet" href="css/formulario.css">
       
    </head>
    
    <body>
     
      <main>
        <div class="container-fluid">
             <div class="row offset-1">
                 <form action="" method="POST" class="col-8 col-md-10 mt-5 mb-5">

                     <div class="contact_grupo mb-4">
                         <label for="nombre" class="squada verde-o">Nombre</label>
                         <input id="nombre" type="text" name="contact_nombre" class="form-control borde-vc" required>
                     </div>

                     <div class="contact_grupo mb-4">
                         <label for="email" class="squada verde-o">E-mail</label>
                         <input id="email" type="email" name="contact_email" class="form-control borde-vc" required>
                     </div>

                     <div class="contact_grupo mb-4">
                         <label for="telefono" class="squada verde-o">Teléfono</label>
                         <input id="telefono" type="text" name="contact_telefono" class="form-control borde-vc" required>
                     </div>

                     <div class="contact_grupo mb-4">
                         <label for="mensaje" class="squada verde-o">Su mensaje</label>
                         <textarea id="mensaje" name="contact_mensaje" class="form-control borde-a" rows="6" required></textarea>
                     </div>

                     <button type="submit" class="btn squada verde-o bg-amarillo mt-4 mb-4 mr-3 border" style="background:none;"><img src="img/zapatilla.png" width="25px"> Enviar</button>

                     <button type="reset" class="btn squada gris bg-amarillo mt-4 mb-4 ml-3 border" style="background:none;"><img src="img/termo.png" width="25px"> Limpiar</button>
                 </form>
             </div>
       </div>   
      </main>
      
      <header class="container-fluid d-none d-lg-block">
          <nav><?php include("nav.php");?></nav>
      </header>
      
      <?php

        include("footer.php");

      ?>