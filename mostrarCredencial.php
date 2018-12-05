<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"
    <div id="header">
    

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<header> <h2> <center> Registros de la base de datos</center> </h2></header>
<body >
<center> <a class="nav-link active" href="actualizarCredencial.php">Actualizar</a> </center>
    <center>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id_credencial</th>
      <th scope="col">rut cliente</th>
      <th scope="col">nombre cliente</th>
      <th scope="col">nombre biblioteca</th>
      <th scope="col">ELIMINAR</th>
    </tr>
  </thead>
  <tbody>

    <?php
include 'conexion.php';
//consulta
$consulta = "SELECT * from credencial";
$mostrar = $conexion -> query($consulta);

while($fila = $mostrar -> fetch_assoc()){
    //codigo para mostrar
    ?>
    <tr>
        <td><?php echo $fila['id_credencial'] ;?> </td>
        <td><?php echo $fila['rut'] ;?> </td>
        <td><?php echo $fila['nombre'] ;?> </td>
        <td><?php echo $fila['nom_biblioteca'] ;?> </td>
        <td><a href="eliminarCredencial.php?id_credencial=<?php echo $fila['id_credencial']; ?> ">Eliminar</a> </td>
        
    </tr>
   <?php
}
?>

  </tbody>
</table>
    </center>
    <footer> 
    <div>
		<form action="credencial.html" method="post">

        <button type="submit" name ="enviar">REGISTRAR NUEVA CREDENCIAL</button>
		</form>
</div>   


    </footer>
</body>

</html>