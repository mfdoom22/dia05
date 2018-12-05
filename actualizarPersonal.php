<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREDENCIAL</title>
</head>
<body>
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
            <form action="ScriptActualizarCredencial.php" method="POST">
                ID PERSONAL <input type="text" name="id"> <br>
                NOMBRE           <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>"/> <br>
                EDAD        <input type="text" name="edad" value="<?php echo $fila['edad']; ?>"/> <br>
                CARGO    <input type="text" name="cargo" value="<?php echo $fila['cargo']; ?>"/> <br>
            
            <button type="submit" >Actualizar personal</button> <br>
            </form>
            <form action="mostrarCredencial.php" method="POST">
            <button type="submit">Mostrar Personal</button>
            </form>
        </article>
    </section>

</body>
</html>