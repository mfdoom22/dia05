<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"
    <div id="header">
    

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
    <link rel=" icon"  href="images/ico.ico">
</head>
<header> <h2> <center> Registros Clientes</center> </h2></header>
<body >
<center> <a class="nav-link active" href="actualizarSolicitud.php">Actualizar</a> </center>
    <center>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id_libro</th>
      <th scope="col">nombre_libro</th>
      <th scope="col">rut</th>
	  <th scope="col">fecha solicuts</th>
      <th scope="col">ELIMINAR</th>
    </tr>
  </thead>
  <tbody>

    <?php
include 'conexion.php';
//consulta
$consulta = "SELECT * from solicitud";
$mostrar = $conexion -> query($consulta);

while($fila = $mostrar -> fetch_assoc()){
    //codigo para mostrar
    ?>
    <tr>
        <td><?php echo $fila['id_solicitud'] ;?> </td>
        <td><?php echo $fila['id_libro'] ;?> </td>
        <td><?php echo $fila['rut'] ;?> </td>
		<td><?php echo $fila['fec_soli'] ;?> </td>
        <td><a href="eliminarSolicitud.php?id_solicitud=<?php echo $fila['id_solicitud']; ?> ">Eliminar</a> </td>
        
    </tr>
   <?php
}
?>

  </tbody>
</table>
    </center>
    <footer> 
    <div>
		<form action="solicitud.html" method="post">

        <button type="submit" name ="enviar">REGISTRAR NUEVA SOLICITUD</button>
		</form>
</div>   


    </footer>
</body>

</html>