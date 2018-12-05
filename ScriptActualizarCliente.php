<?php
include 'conexion.php';
//Variables
$id= $_POST["rut"];
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$correo = $_POST["correo"];
$genero = $_POST["genero"];
//consulta sql
@mysqli_select_db($db, $conexion);
$actualizar = "UPDATE cliente SET  nombre='$nombre', edad = '$edad',
correo = '$correo', genero = '$genero' WHERE rut = '$id'";


//ejecutar consulta
$resultado = mysqli_query($conexion, $actualizar);
if (!$resultado){
echo' <script>
alert("Error al actualizar");
window.history.go(-1);
</script>';
} else{
echo' <script>
alert("Registro actualizado correctamente");
</script>';
header("Location: mostrarCliente.php");
}
//cerrar conexion
mysqli_close($conexion);