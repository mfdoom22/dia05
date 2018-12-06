<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"
    <div id="header">
    

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
</head>
<header> <h2> <center> Registros Clientes y credencial</center> </h2></header>
<body background ="https://2.bp.blogspot.com/-nJ12IC51iYA/Wm-DNYNd0mI/AAAAAAAA2xs/OXbDcqJk6EYXm6YTWi3t_g0j6FHUZNPfwCLcBGAs/s1600/C%25C3%25B3mo%2Barmamos%2Bel%2Bfondo%2Bbibliogr%25C3%25A1fico%2Bde%2Buna%2Bbiblioteca.jpg" >
            <center>
                <a class="nav-link active" href="index.html">atras </a>          
            </center>


    <center>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id credencial</th>
      <th scope="col">rut</th>
      <th scope="col">nombre</th>
      <th scope="col">edad</th>
	  <th scope="col">correo</th>
	  <th scope="col">genero</th>
    </tr>
  </thead>
  <tbody>

    <?php
include 'conexion.php';
//consulta
$consulta = "SELECT id_credencial, cliente.rut, cliente.nombre, edad, correo, genero  
from cliente, credencial where credencial.rut = cliente.rut";
$mostrar = $conexion -> query($consulta);

while($fila = $mostrar -> fetch_assoc()){
    //codigo para mostrar
    ?>
    <tr>
    <td><?php echo $fila['id_credencial'] ;?> </td>
        <td><?php echo $fila['rut'] ;?> </td>
        <td><?php echo $fila['nombre'] ;?> </td>
        <td><?php echo $fila['edad'] ;?> </td>
		<td><?php echo $fila['correo'] ;?> </td>
		<td><?php echo $fila['genero'] ;?> </td>
        
    </tr>
   <?php
}
?>

  </tbody>
</table>
    </center>
    <footer> 
      


    </footer>
</body>

</html>