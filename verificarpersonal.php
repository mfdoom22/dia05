<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Verificar</title>
	
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  
  <body>  
  <div class="container">
  
  <?php 
 //Conexion con la base de datos.
 $conexion= new mysqli("localhost","root", "", "biblioteca");
   
 if($conexion->connect_errno){
      echo "Fallo al conectar a MySQL:(". $conexion->connect_errno.")";
 }
 else{
 $conexion->select_db("biblioteca");
      
 //declaramos como variables a los campos de texto del formulario.
 $nombre=$_POST["email"];
 $password=$_POST["pass"];

 //Consulta del usuario y el password
 $consulta="SELECT email,pass FROM loginp
 WHERE email='$nombre' and pass='$password'";
 if($query= $conexion->query($consulta)){
 $row=$query->fetch_array();
 $nr =$query->num_rows;
 //Si existe el usuario lo va a redireccionar a la pagina de Bienvenida.
 if($nr == 1){
   header ("Location:personal.html");
 }
 //Si no existe lo va a enviar al login otra vez.
 else if($nr <= 0) {
echo' <script>
	alert("No se pudo iniciar");
	window.history.go(-1);
	</script>';
 }
 }
 else{
 echo $conexion->error;
 }
}
?>
</div>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>