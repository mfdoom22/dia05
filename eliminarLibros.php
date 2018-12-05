<?php

include 'conexion.php';
//Variables
$id_libro= $_REQUEST['id_libro'];


//consulta sql 
$eliminar = "DELETE from libro where id_libro = '$id_libro' ";
$resultado = $_conexion -> query($eliminar);


//ejecutar consulta

if (!$resultado){
echo' <script>
alert("No se pudo borrar");
window.history.go(-1);
</script>';
} else{
echo' <script>
alert("ELIMINADO");
window.history.go(-1);
</script>';
header("Location: mostrarLibros.php");

}
//cerrar conexion
mysqli_close($_conexion);