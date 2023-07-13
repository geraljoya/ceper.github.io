<?php

include("cabecera.php");

session_start();

?>

      <main>
         <div class="container-fluid">
             <div class="row no-gutters">
                 <div class="ensenanza bg-blanco col-10 col-lg-9 offset-1 mt-5">
                     <h3 class="squada mt-4 mb-4">ENSEÑANZA</h3>
                     <p class="d-flex justify-content-between robot">
                         <span style="border-right: none; border-color: #E0CC78;">Global</span>
                         <span style="border-right:none; border-left:none; border-color: #007038;">Análitica</span>
                         <span style="border-left:none; border-color: #99BF38;">Auto-adapatativa</span>
                     </p>
                 </div>
             </div>

             <div class="row mt-5 bg-blanco no-gutters">
                 <div class="servicios col-12 col-md-6 col-lg-3 text-center mt-3 mb-3">
                     <img src="img/cronometro.png" alt="Servicios de entrenamientos personalizados" class="mt-5 mb-5">
                     <h4 class="squada verde-o">ENTRENAMIENTOS</h4>
                     <h4 class="squada verde-o">PERSONALIZADOS</h4>
                 </div>

                 <div class="servicios col-12 col-md-6 col-lg-3 text-center mt-3 mb-3">
                     <img src="img/silbato.png" alt="Servicios de escuela de fútbol y futsal" class="mt-5 mb-5">
                     <h4 class="squada verde-o">ESCUELA DE</h4>
                     <h4 class="squada verde-o">FÚTBOL Y FUTSAL</h4>
                 </div>

                 <div class="servicios col-12 col-md-6 col-lg-3 text-center mt-3 mb-3">
                     <img src="img/heart.png" alt="Servicios de recuperación deportiva" class="mt-5 mb-5">
                     <h4 class="squada verde-o">RECUPERACIÓN</h4>
                     <h4 class="squada verde-o">DEPORTIVA</h4>
                 </div>

                 <div class="servicios col-12 col-md-6 col-lg-3 text-center mt-3 mb-3">
                     <img src="img/lazo.png" alt="Servicios de eventos deportivos" class="mt-5 mb-5">
                     <h4 class="squada verde-o">EVENTOS</h4>
                     <h4 class="squada verde-o">DEPORTIVOS</h4>
                 </div>
             </div>

             <div class="row mt-5 mb-5 bg-gris servicio">
                 <img src="img/entrenamientos-personalizados.jpg" alt="Servicios de entrenamientos personalizados" class="col-12 col-md-6 col-lg-5 h-100">
                 <div class="desc-servicio col-12 col-md-6 col-lg-5 mt-lg-5 text-center text-md-right roboto">
                     <h3 class="verde-o mt-4 mb-4 squada">ENTRENAMIENTOS PERSONALIZADOS</h3>
                     <p class="blanco">Especialidad en mejorar las capacidades físicas y técnicas de los jugadores , se enfoca el trabajo en la mejora individual mediante trabajos específicos y entrenamientos individualizados, que se enfocan en el desarrollo de los diferentes elementos que debe tener un jugador de futbol.</p>
                     <p class="blanco">El desarrollo de nuestra metodología esta enfocado en el entrenamiento funcional, cognitivo y de perfeccionamiento del atleta.</p>
                 </div>
             </div>
             
             <div class="row mt-5 mb-5 bg-gris servicio">
                 <img src="img/escuela-futsal.jpg" alt="Servicios de escuela de fútbol y futsal" class="col-12 col-md-6 col-lg-5 h-100">
                 <div class="desc-servicio col-12 col-md-6 col-lg-5 mt-lg-5 text-center text-md-right roboto">
                     <h3 class="verde-o mt-4 mb-4 squada">ESCUELA DE FÚTBOL Y FUTSAL</h3>
                     <p class="blanco">La escuela de futbol es el espacio creado para el aprendizaje del fútbol base desde sus etapas de formación básica y aprendizaje del deporte, para llegar a obtener los mejores resultados en el aprendizaje motriz, físico y técnico.</p>
                     <p class="blanco">En la escuela de Futsal-Futsala se pretende vincular a niños de escasos recursos para el ingreso a una escuela de formación , bajo los mismos parámetros del entrenamiento y desarrollo deportivo.</p>
                 </div>
             </div>
             
             <div class="row mt-5 mb-5 bg-gris servicio">
                 <img src="img/recuperacion-deportiva.jpg" alt="Servicios de recuperación deportiva" class="col-12 col-md-6 col-lg-5 h-100">
                 <div class="desc-servicio col-12 col-md-6 col-lg-5 mt-lg-5 text-center text-md-right roboto">
                     <h3 class="verde-o mt-4 mb-4 squada">RECUPERACIÓN DEPORTIVA</h3>
                     <p class="blanco">La recuperación deportiva esta dirigida para deportistas que se encuentran lesionados, que no cuenten en su club o escuela un programa de formación en este campo.</p>
                     <p class="blanco">El programa incluye el apoyo y continuidad del trabajo, haciendo un seguimiento detallado de su recuperación y la posible incorporación a realizar sus actividades.</p>
                 </div>
             </div>
             
             <div class="row mt-5 mb-5 bg-gris servicio">
                 <img src="img/eventos-deportivos.jpg" alt="Servicios de eventos deportivos" class="col-12 col-md-6 col-lg-5 h-100">
                 <div class="desc-servicio col-12 col-md-6 col-lg-5 mt-lg-5 text-center text-md-right roboto">
                     <h3 class="verde-o mt-4 mb-4 squada">EVENTOS DEPORTIVOS</h3>
                     <p class="blanco">Organización y acompañamiento para realizar eventos deportivos, culturales y competitivos, es un proyecto creado por CEPER para brindar apoyo a programas de desarrollo deportivo y recreativo para empresas, colegios, juntas de acción comunal, conjuntos residenciales, entidades publicas y privadas que deseen promover estilos de vida saludable mejorando la calidad de vida de sus integrantes.</p>
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