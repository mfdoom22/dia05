<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CLIENTE</title>
</head>
<body>
<?php


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
            <form action="ScriptActualizarCliente.php" method="POST">
                rut <input type="text" name="rut"> <br>
                nombre           <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>"/> <br>
                edad        <input type="text" name="edad" value="<?php echo $fila['edad']; ?>"/> <br>
                correo    <input type="text" name="correo" value="<?php echo $fila['correo']; ?>"/> <br>

                <input type="radio" name="genero" value="<?php echo $fila['genero']; ?>"/> Masculino <br>
                <input type="radio" name="genero" value="<?php echo $fila['genero']; ?>"/> Femenino<br>
            
            <button type="submit" >Actualizar Cliente</button> <br>
            </form>
            <form action="mostrarCliente.php" method="POST">
            <button type="submit">Mostrar Clientes</button>
            </form>
        </article>
    </section>

</body>
</html>