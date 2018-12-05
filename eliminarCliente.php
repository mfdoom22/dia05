<?php


include 'conexion.php';
//Variables
$id= $_REQUEST['rut'];


//consulta sql 
$eliminar = "DELETE from cliente where rut = '$id' ";
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
header("Location: mostrarCliente.php");
}
//cerrar conexion
mysqli_close($conexion);
?>