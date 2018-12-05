<?php
include 'conexion.php';
//Variables
$id= $_POST["id"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$edad = $_POST["edad"];
$direccion = $_POST["direccion"];
//consulta sql
@mysqli_select_db($db, $conexion);
$actualizar = "UPDATE personal SET  nombre='$nombre', telefono = '$telefono',
edad = '$edad', direccion = '$direccion' WHERE id = '$id'";


//ejecutar consulta
$resultado = mysqli_query($_conexion, $actualizar);
if (!$resultado){
echo' <script>
alert("Error al actualizar");

</script>';
} else{
echo' <script>
alert("Registro actualizado correctamente");
</script>';
header("Location: mostrarPersonal.php");
}
//cerrar conexion
mysqli_close($conexion);