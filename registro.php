<?php

include("conexion.php");

if (isset($_POST['registrar'])) {
    if (
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['grado']) >= 1 &&
        strlen($_POST['domicilio']) >= 1 &&
        strlen($_POST['sexo']) >= 1 &&
        strlen($_POST['hobbi']) >= 1
    ) {

        $nombre = trim($_POST['nombre']);
        $grado = trim($_POST['grado']);
        $domicilio = trim($_POST['domicilio']);
        $sexo = trim($_POST['sexo']);
        $hobbi = trim($_POST['hobbi']);

        $consulta = "INSERT INTO usuario(nombre, grado, domicilio, sexo, intereses) 
            VALUES ('$nombre','$grado','$domicilio','$sexo','$hobbi')";

        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}
