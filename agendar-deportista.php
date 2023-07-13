<?php

include("cabecera-deportista.php");

?>

<main>
    
    <div class="container">
 	
    <div class="row"> 
        <h3 class="text-center mt-5 squada">Mis entrenamientos</h3>
    </div>
       
        <form id="formulario" action="insertarcontacto.php" method="POST" class="squada">

              <ul id="progreso">
                <li class="active" style="font-size: 20px; color: #007038;">DATOS BÁSICOS</li>
                <li style="font-size: 20px; color: #007038;">TU POSICIÓN</li>
                <li style="font-size: 20px; color: #007038;">DISPONIBILIDAD</li>
              </ul>

              <fieldset>
                <h2 class="verde-c">Datos básicos</h2>
                <h3 class="amarillo">Infórmanos</h3>
                <input type="text" class="pwd" name="Nombre_del_deportista" id="Nombre_del_deportista" placeholder="Nombre completo">
                <input type="telefono" class="pwd" name="email" id="Lugar" placeholder="E-mail">
                <input type="telefono" class="pwd" name="celular" id="Lugar" placeholder="N° celular">
                <input type="telefono" class="pwd" name="Lugar" id="Lugar" placeholder="Lugar donde quieres que te entrenemos">
                <input type="button" name="next" class="next action-button" value="Siguiente">
              </fieldset>

              <fieldset>

                <h2 class="fs-title">Posicionate</h2>
                <input type="celular" class="pwd" name="posicionamiento" id="posicionamiento"  placeholder="Posición">
                <input type="button" name="previous" class="previous action-button" value="Anterior">
                <input type="button" name="next" class="next action-button" value="Siguiente">
              </fieldset>

              <fieldset>
                <h2 class="fs-title">Confirma tu disponibilidad</h2>
                <h3 class="fs-subtitle">Nunca venderemos tu información personal</h3>
                <input type="telefono" class="pwd"  name="hora" id="Lugar" placeholder="Hora">

                <input type="telefono"  class="pwd" name="ampm" id="ampm" placeholder="am - pm">

                <input type="celular"  class="pwd" name="mes" id="posicionamiento" placeholder="Mes">

                <input type="text" class="pwd" name="dia" id="dia" placeholder="Día">
                <textarea type="text" name="Mensaje" class="pwd" id="Mensaje" placeholder="Mensaje"></textarea>
                <input type="button" name="previous" class="previous action-button" value="Anterior">
                <input type="submit" value="Enviar" class="action-button">
              </fieldset>

          </form>

      </div>

    
</main>

<?php

include("footer-deportista.php");

?>