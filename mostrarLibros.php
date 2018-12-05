<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"
    <div id="header">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libros</title>
</head>
<body>
    <header> 
        <h1> REGISTRO LIBROS </h1>
    </header>
    <nav></nav>
    <center> <a class="nav-link active" href="actualizarLibros.php">Actualizar</a> </center>
    <center>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">autor</th>
	  <th scope="col">estado</th>
      <th scope="col">ELIMINAR</th>
    </tr>
  </thead>
  <tbody>

<?php
include 'conexion.php';
//consulta
$consulta = "SELECT * from Libro";
$mostrar = $conexion -> query($consulta);

while($fila = $mostrar -> fetch_assoc()){
//codigo para mostrar
?>
<tr>
    <td><?php echo $fila['rut'] ;?> </td>
    <td><?php echo $fila['nombre'] ;?> </td>
    <td><?php echo $fila['edad'] ;?> </td>
    <td><?php echo $fila['correo'] ;?> </td>
    <td><?php echo $fila['genero'] ;?> </td>
    <td><a href="eliminarCliente.php?rut=<?php echo $fila['rut']; ?> ">Eliminar</a> </td>
    
</tr>
<?php
}
?>

</tbody>
</body>
</html>