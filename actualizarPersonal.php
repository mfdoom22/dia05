<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREDENCIAL</title>
    <link rel=" icon"  href="images/ico.ico">
</head>
<body  background ="images/lib.png ">
<center> <a class="nav-link active" href="mostrarPersonal.html"> Atras</a></center>
<header>
       <center> <h1>ACTUALIZAR DATOS DE PERSONAL:</h1></center>
    </header>
<?php
error_reporting(E_ALL ^ E_NOTICE);

$n = $_REQUEST['id'];
include 'conexion.php';
//consulta
$consulta = "SELECT * from personal where id = '$n' ";
$mostrar = $conexion -> query($consulta);

$fila = $mostrar -> fetch_assoc();
    
    ?>
    
    <nav></nav>
    <section>
        <article>
            <form action="ScriptActualizarPersonal.php" method="POST">
                ID PERSONAL <input type="text" name="id"> <br>
                NOMBRE           <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>"/> <br>
                EDAD        <input type="text" name="edad" value="<?php echo $fila['edad']; ?>"/> <br>
                CARGO    <input type="text" name="cargo" value="<?php echo $fila['cargo']; ?>"/> <br>
            
            <button type="submit" >Actualizar personal</button> <br>
            </form>
            <form action="mostrarPersonal.php" method="POST">
            <button type="submit">Mostrar Personal</button>
            </form>
        </article>
    </section>

</body>
</html>