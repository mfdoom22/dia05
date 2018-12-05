<?php
include 'conexion.php';
//Variables
$id= $_POST["rut"];
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$correo = $_POST["correo"];
$genero = $_POST["genero"];


//consulta sql
$insertar = "INSERT into cliente(rut, nombre ,edad, correo, genero) values
('$id', '$nombre','$edad', '$correo', '$genero')";
$verificar = mysqli_query($conexion, "SELECT * from cliente where rut = '$id'");

if(mysqli_num_rows($verificar) > 0){
echo' <script>
alert("ERROR:id ya está ingresado");
window.history.go(-1);
</script>';
exit;
}

//ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado){
echo' <script>
alert("Error al registrar Cliente");

</script>';
} else{
echo' <script>
alert("Registro ingresado correctamente");
window.history.go(-1);
</script>';
}
//cerrar conexion
mysqli_close($conexion);

?>