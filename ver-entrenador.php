<?php
include("cabecera-entrenador.php");


session_start();

	require_once("conexion-cnx.php");
	$sql="SELECT * FROM entrenamiento";
	$resultado= mysqli_query(Conectar(), $sql);

?>

<main>
    <div class="container-fluid">
        <div class="row mt-5 mb-5">
            <table class="table" style="width: 100%;">
                  <thead>
                     <tr class="text-center">
                        <th colspan="9" class="bg-verde-o blanco">TUS ENTRENAMIENTOS</th>
                     </tr>
                     <tr class="bg-verde-c gris">
                        <th>Nombre</th>
                        <th>E-mail</th>
                        <th>Nº Celular</th>
                        <th>Posicionamiento</th>
                        <th>Hora</th>
                        <th>AM - PM</th>
                        <th>Mes</th>
                        <th>Día</th>
                        <th>Mensaje</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                        while($renglon = mysqli_fetch_array($resultado))
                        {
                                $Nombre_del_deportista = $renglon['Nombre_del_deportista'];
                                $email=$renglon['email'];
                                $celular=$renglon['celular'];
                                $posicionamiento=$renglon['posicionamiento'];
                                $hora=$renglon['hora'];
                                $ampm=$renglon['ampm'];
                                $mes=$renglon['mes'];
                                $dia=$renglon['dia'];
                                $Mensaje=$renglon['Mensaje'];
                        ?>

                        <tr>
                            <th scope="row"><?php echo $Nombre_del_deportista ?></th>
                            <td><?php echo $email ?></td>
                            <td><?php echo $celular ?></td>
                            <td><?php echo $posicionamiento ?></td>
                            <td><?php echo $hora ?></td>
                            <td><?php echo $ampm ?></td>
                            <td><?php echo $mes ?></td>
                            <td><?php echo $dia ?></td>
                            <td><?php echo $Mensaje ?></td>
                        </tr>

                        <?php
                            }
                        ?>
                  </tbody>
            </table>
        </div>
    </div>

</main>



<?php

include("footer-deportista.php");

?>