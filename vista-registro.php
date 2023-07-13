<?php

include("cabecera-sesion.php");

session_start();

?>
     
    <main>
        <div class="container">
             <div class="row text-center">
                <div class="sesiones col-12 col-lg-8 bg-gris ">
                    <a href="vista-ingreso.php" class="d-inline-block pt-2 pb-2 bg-verde-o squada blanco w-100">Ingreso</a>
                    <a href="vista-registro.php" class="d-inline-block pt-2 pb-2 bg-verde-c squada blanco w-100">Inscripción</a>
                </div>
             </div>
             
             <div class="row text-center">
                
                 <form action="registro.php" method="post" class="sesiones col-12 col-lg-8 bg-gris">
                     
                     <a href="index.php" class="btn bg-verde-c pl-5 pr-5 gris squada mt-3">INICIO</a>
                     <a href="index.php"><img src="img/logo.png" alt="Ir a inicio CEPER" class="m-4" width="40%"></a>

                     <div class="dato_grupo">
                         <label class="squada verde-c">Nombre</label>
                         <input type="text" name="nombre_user"  placeholder="Nombre" class="form-control borde-vc" required>
                     </div>

                     
                     <div class="datogrupo mt-3">
                         <label class="squada verde-c">E-mail</label>
                         <input type="text" name="email" placeholder="E-mail" class="form-control borde-vc" required>
                     </div>

                     
                     <div class="datogrupo mt-3">
                         <label class="squada verde-c">Contraseña</label>
                         <input type="password" name="password"  placeholder="Contraseña" class="form-control borde-vc" required>
                     </div>
                     
                     <div class="datogrupo mt-3">
                         <label class="squada verde-c">Confirmar Contraseña</label>
                         <input type="password" name="cofir_password" placeholder="Contraseña" class="form-control borde-vc" required>
                     </div>

                     <input type="submit" value="Bienvenido" name="submit" class="btn squada gris bg-verde-c borde-vc mt-5 mb-4 mr-3">
                     
                 </form>
             </div>
       </div>   
      </main>
            
<?php
    if(isset($_POST['submit']))
    {
        require("registro.php");
    }
?>

</body>
</html>