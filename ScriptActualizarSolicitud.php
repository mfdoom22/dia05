<?php
include 'conexion.php';
//Variables
$id= $_POST["id_solicitud"];
$id_lib = $_POST["id_libro"];
$rut = $_POST["rut"];
$fecha = $_POST["fec_soli"];
//consulta sql
@mysqli_select_db($db, $conexion);
$actualizar = "UPDATE solicitud SET  id_libro='$id_lib', rut = '$rut',
fec_soli = '$fecha' WHERE id_solicitud = '$id'";


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
header("Location: mostrarSolicitud.php");
}
//cerrar conexion
mysqli_close($conexion);