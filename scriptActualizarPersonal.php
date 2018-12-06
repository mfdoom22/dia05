<?php
include 'conexion.php';
//Variables
$id= $_POST["id"];
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$cargo = $_POST["cargo"];

//consulta sql
@mysqli_select_db($db, $conexion);
$actualizar = "UPDATE personal SET  nombre='$nombre', edad = '$edad',
cargo = '$cargo' WHERE id = '$id'";


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
header("Location: mostrarPersonal.php");
}
//cerrar conexion
mysqli_close($conexion);