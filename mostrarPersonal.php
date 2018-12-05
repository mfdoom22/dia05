<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"
    <div id="header">
    

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PERSONAL</title>
</head>
<header> <h2> <center> Registrar Personal</center> </h2></header>
<body >
<center> <a class="nav-link active" href="actualizarPersonal.php">Actualizar</a> </center>
    <center>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id_personal</th>
      <th scope="col">nombre</th>
      <th scope="col">edad</th>
      <th scope="col">cargo</th>
      <th scope="col">ELIMINAR</th>
    </tr>
  </thead>
  <tbody>

    <?php
include 'conexion.php';
//consulta
$consulta = "SELECT * from personal";
$mostrar = $conexion -> query($consulta);

while($fila = $mostrar -> fetch_assoc()){
    //codigo para mostrar
    ?>
    <tr>
        <td><?php echo $fila['id'] ;?> </td>
        <td><?php echo $fila['nombre'] ;?> </td>
        <td><?php echo $fila['edad'] ;?> </td>
        <td><?php echo $fila['cargo'] ;?> </td>
        <td><a href="eliminarPersonal.php?id=<?php echo $fila['id']; ?> ">Eliminar</a> </td>
        
    </tr>
   <?php
}
?>

  </tbody>
</table>
    </center>
    <footer> 
    <div>
		<form action="personal.html" method="post">

        <button type="submit" name ="enviar">REGISTRAR NUEVO PERSONAL</button>
		</form>
</div>   


    </footer>
</body>

</html>