<?php

include("cabecera-sesion.php");

session_start();

session_destroy();

echo "
    <div class='container text-center'>
        <form  class='col-12 col-md-8 col-lg-6 bg-gris'>
            <p class='amarillo squada pt-5'>CERRANDO SU SESIÒN, GRACIAS POR VISITARNOS</p>
            <h6 class='squada blanco mt-5'><img src='img/comillas-y.png' width='70'> Idealiza tus metas, aquí las entrenamos <img src='img/comillas-g.png' width='70'></h6>";
?>

<img src="img/loading1.gif" alt="Cerrando sesiòn" style='backgroung-image: url(img/logo.png); backgrounnd-size: contain;' width='100px'></div>

<?php

echo "<meta http-equiv='refresh' content='1;url=index.php'>";

?>