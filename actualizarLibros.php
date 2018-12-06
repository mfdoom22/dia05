<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libros</title>
    <link rel=" icon"  href="images/ico.ico">
</head>
<body>
<?php
error_reporting(E_ALL ^ E_NOTICE);

$n = $_REQUEST['id_libros'];
include 'conexion.php';
//consulta
$consulta = "SELECT * from libro where id_libro = '$n' ";
$mostrar = $conexion -> query($consulta);

$fila = $mostrar -> fetch_assoc();
    
    ?>
    
    <nav></nav>
    <section>
        <article>
            <form actio="ScriptActualizarLibro" method="POST">
                ID LIBRO <input type="text" name="id_libro"> <br>
                NOMBRE           <input type="text" name="nom_libro" value="<?php echo $fila['nom_libro']; ?>"/> <br>
                AUTOR       <input type="text" name="autor" value="<?php echo $fila['autor']; ?>"/> <br>
                ESTADO    <input type="text" name="estado" value="<?php echo $fila['estado']; ?>"/> <br>
            
            <button type="submit" >Actualizar libro</button> <br>
            </form>
            <form action="mostrarLibros.php" method="POST">
            <button type="submit">Mostrar libro</button>
            </form>
        </article>
    </section>

</body>
</html>