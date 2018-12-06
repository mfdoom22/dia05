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
<body background ="images/course_1.jpg">
    <header> 
        <center><h1> REGISTRO LIBROS </h1></center>
    </header>
    <nav></nav>
    <center> <a class="nav-link active" href="index.html">Menu </a>           
            </center>
    <center> <a class="nav-link active" href="actualizarLibro.php">Actualizar</a> </center>
    <center>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">autor</th>
      <th scope="col">editorial</th>
	  <th scope="col">estado</th>
      <th scope="col">ELIMINAR</th>
    </tr>
  </thead>
  <tbody>

<?php
include 'conexion.php';
//consulta
$consulta = "SELECT * from libro";
$mostrar = $conexion -> query($consulta);

while($fila = $mostrar -> fetch_assoc()){
//codigo para mostrar
?>
<tr>
    <td><?php echo $fila['id_libro'] ;?> </td>
    <td><?php echo $fila['nom_libro'] ;?> </td>
    <td><?php echo $fila['autor'] ;?> </td>
    <td><?php echo $fila['editorial'] ;?> </td>
    <td><?php echo $fila['estado'] ;?> </td>
    <td><a href="eliminarLibros.php?id_libro=<?php echo $fila['id_libro']; ?> ">Eliminar</a> </td>
    
</tr>
<?php
}
?>

</tbody>
<form action="libros.html" method="POST">
<button type="submit"> Ingresar Datos </button>
</form>
</body>
</html>