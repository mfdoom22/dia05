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
<header> <h2> <center> Registros Libro, cliente y solicitud</center> </h2></header>
<body background ="https://2.bp.blogspot.com/-nJ12IC51iYA/Wm-DNYNd0mI/AAAAAAAA2xs/OXbDcqJk6EYXm6YTWi3t_g0j6FHUZNPfwCLcBGAs/s1600/C%25C3%25B3mo%2Barmamos%2Bel%2Bfondo%2Bbibliogr%25C3%25A1fico%2Bde%2Buna%2Bbiblioteca.jpg" >
            <center>
                <a class="nav-link active" href="index.html">atras </a>          
            </center>


    <center>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id solicitud</th>
      <th scope="col">id libro</th>
      <th scope="col">autor</th>
      <th scope="col">rut cliente</th>
      <th scope="col">nombre cliente</th>
      <th scope="col">fecha solicitud</th>
    </tr>
  </thead>
  <tbody>

    <?php
include 'conexion.php';
//consulta
$consulta = "SELECT id_solicitud, libro.id_libro, autor, cliente.rut,nombre, fec_soli 
from cliente, solicitud, libro
where solicitud.rut = cliente.rut and solicitud.id_libro = libro.id_libro" ;
$mostrar = $conexion -> query($consulta);

while($fila = $mostrar -> fetch_assoc()){
    //codigo para mostrar
    ?>
    <tr>
    <td><?php echo $fila['id_solicitud'] ;?> </td>
        <td><?php echo $fila['id_libro'] ;?> </td>
        <td><?php echo $fila['autor'] ;?> </td>
        <td><?php echo $fila['rut'] ;?> </td>
		<td><?php echo $fila['nombre'] ;?> </td>
        <td><?php echo $fila['fec_soli'] ;?> </td>
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