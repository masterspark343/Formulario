<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario</title>
   
    <link rel="stylesheet" type="text/css" href="disenio.css">

</head>
<body>
    
    <form method="POST" id="form" class="box">
    <h1>Formulario </h1>
        <!--<label for="nombre"> Ingresa tu nombre:</label>-->
        <input id="texto" type="text" name="nombre" placeholder="Nombre">
        <!--<br>
        <br>
        Grado de estudios: -->

        <select name="grado">
            <option selected class="selected"> Grado de estudios </option>
            <option  value="primaria"> primaria </option>
            <option  value="secundaria"> secundaria </option>
            <option  value="bachillerato"> bachillerato </option>
            <option  value="universidad"> universidad </option>
        </select>


        <!--<br>
            <br>
        Ingresa tu domicilio: <br> -->
        <textarea name="domicilio" rows="5" cols="40 " wrap="hard"> </textarea>

<div class="radio">
        <h5>Sexo: </h5>

        <label for="masculino">
        <input type="radio" name="sexo" value="masculino" checked="checked"> Masculino <br>
        </label>
        <label for="femenino">
        <input type="radio" name="sexo" value="femenino"> Femenino <br>
        </label>
        <label for="otro"> 
        <input type="radio" name="sexo" value="otro"> Otro 
        </label>
        
       
</div>
<div class="checkbox">
        <h5>Intereses: </h5>

        <label for="lectura">
        <input type="checkbox" name="hobbi" value="lectura" checked="checked"> Lectura <br>
        </label>
        <label for="besibol">
        <input type="checkbox" name="hobbi" value="beisbol"> Besibol <br>
        </label>
        <label for="hockey">
        <input type="checkbox" name="hobbi" value="hockey"> Hockey <br>
        </label>
        <label for="musica">
        <input type="checkbox" name="hobbi" value="musica"> Musica <br>
        </label>
        <label for="ajedrez">
        <input type="checkbox" name="hobbi" value="ajedrez"> Ajedrez <br>
        </label>
        <label for="programar">
        <input type="checkbox" name="hobbi" value="programar"> Programar
        </label>
</div>

<br><br><input type="submit" name="registrar" value="Enviar"> 

    </form>
    <?php 
        include("registro.php");
        ?>
</body>
</html>