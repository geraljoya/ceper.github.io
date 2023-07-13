<?php

include("cabecera-deportista.php");

    session_start();
    if (@!$_SESSION['nombre_user']) {

    }

?>

        <main>
            <div class="row">
                <div class="img-usuario col-10 col-md-5 offset-md-1 mt-5 mb-5">
                    <img src="img/gallery-4.jpg" alt="" width="100%" style="border-radius:100px;">
                </div>
                <div class="datos col-12 col-md-4 mt-5 text-justify">
                    <h3 class="verde-o">Descripción de un deportista:</h3>
                    <p>Medios Centro: Aquí si que puedes encontrar de todo en el fútbol actual y que cada uno desde su faceta, sobreviven en el fútbol profesional.Así, tienes el recuperador, el organizador, el que dota de equilibrio táctico al equipo, el que maneja el ritmo del juego de tu equipo, el llegador, el replegador, que siempre llega a la ayuda, infinidad de aspectos, que hace que este puesto, tenga las exigencias de un futbolista completo..</p>
                </div>
            </div>
        </main>
 
<?php

include("footer-deportista.php");

?>