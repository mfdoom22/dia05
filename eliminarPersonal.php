<?php
error_reporting(E_ALL ^ E_NOTICE);

include 'conexionBD.php';
//Variables
$id= $_REQUEST['id'];


//consulta sql 
$eliminar = "DELETE from personal where id = '$id' ";
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
header("Location: mostrarPersonal.php");
}
//cerrar conexion
mysqli_close($conexion);
?>