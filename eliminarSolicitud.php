<?php


include 'conexion.php';
//Variables
$id= $_REQUEST['id_solicitud'];


//consulta sql 
$eliminar = "DELETE from solicitud where id_solicitud = '$id' ";
$resultado = $conexion -> query($eliminar);


//ejecutar consulta

if (!$resultado){
echo' <script>
alert("No se pudo borrar");
window.history.go(-1);
</script>';
} else{
echo' <script>
window.history.go(-1);
alert("ELIMINADO");
</script>';
header("Location: mostrarSolicitud.php");
}
//cerrar conexion
mysqli_close($conexion);
?>