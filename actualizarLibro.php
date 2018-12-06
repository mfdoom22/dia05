<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitud</title>
    <link rel=" icon"  href="images/ico.ico">
</head>
<body  background="images/lib.png">

            <center>
                <a class="nav-link active" href="mostrarLibros.php">atras </a>          
            </center>
            <header>
       <center> <h1>ACTUALIZAR DATOS DE LIBRO:</h1></center>
    </header>
<?php

error_reporting(E_ALL ^ E_NOTICE);
$n = $_REQUEST["id"];
include 'conexion.php';
//consulta
$consulta = "SELECT * from libro where id_libro = '$n' ";
$mostrar = $conexion -> query($consulta);

$fila = $mostrar -> fetch_assoc();
    
    ?>
    
    <nav></nav>
    <section>
        <article><center>
            <form action="ScriptActualizarLibro.php" method="POST">
                id libro <input type="text" name="id_libro"> <br>
                nombre           <input type="text" name="nom_libro" value="<?php echo $fila['nom_libro']; ?>"/> <br>
                autor        <input type="text" name="autor" value="<?php echo $fila['autor']; ?>"/> <br>
                editorial    <input type="text" name="editorial" value="<?php echo $fila['editorial']; ?>"/> <br>

                <input type="radio" name="estado" value="arrendado"/> Arrendado <br>
                <input type="radio" name="estado" value="disponible"/> Disponible<br>
            
            <button type="submit" >Actualizar Libro</button> <br>
            </form>
            <form action="mostrarLibros.php" method="POST">
            <button type="submit">Mostrar Libro</button>
            </form></center>
        </article>
    </section>

</body>
</html>