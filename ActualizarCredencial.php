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
<body background ="images/biblioteca.png" >
<center> <a class="nav-link active" href="mostrarcredencial.php">Atras</a> </center>
    

<?php
error_reporting(E_ALL ^ E_NOTICE);

$n = $_REQUEST['id'];
include 'conexion.php';
//consulta
$consulta = "SELECT * from credencial where id_credencial = '$n' ";
$mostrar = $conexion -> query($consulta);

$fila = $mostrar -> fetch_assoc();
    
    ?>
    
    <nav></nav>
    <section>
        <article>
            <form action="ScriptActualizarCredencial.php" method="POST">
                id_credencial <input type="text" name="id_credencial"> <br>
                RUT           <input type="text" name="rut" value="<?php echo $fila['rut']; ?>"/> <br>
                NOMBRE        <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>"/> <br>
                BIBLIOTECA    <input type="text" name="nom_biblioteca" value="<?php echo $fila['nom_biblioteca']; ?>"/> <br>
            
            <button type="submit" >Actualizar credencial</button> <br>
            </form>
            <form action="mostrarCredencial.php" method="POST">
            <button type="submit">Mostrar credenciales</button>
            </form>
        </article>
    </section>

</body>
</html>