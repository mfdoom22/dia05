<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SOLICITUD</title>
    <link rel=" icon"  href="images/ico.ico">
</head>
<body>
<?php

error_reporting(E_ALL ^ E_NOTICE);
$n = $_REQUEST["id"];
include 'conexion.php';
//consulta
$consulta = "SELECT * from cliente where rut = '$n' ";
$mostrar = $conexion -> query($consulta);

$fila = $mostrar -> fetch_assoc();
    
    ?>
    
    <nav></nav>
    <section>
        <article>
            <form action="ScriptActualizarSolicitud.php" method="POST">
                id solicitud         <input type="text" name="id_solicitud"> <br>
                id libro      <input type="text" name="id_libro" value="<?php echo $fila['id_libro']; ?>"/> <br>
                rut        <input type="text" name="rut" value="<?php echo $fila['rut']; ?>"/> <br>
                fecha solicitud      <input type="text" name="fec_soli" value="<?php echo $fila['fec_soli']; ?>"/> <br>

                
            
            <button type="submit" >Actualizar Solicitud</button> <br>
            </form>
            <form action="mostrarSolicitud.php" method="POST">
            <button type="submit">Mostrar Solicitud</button>
            </form>
        </article>
    </section>

</body>
</html>