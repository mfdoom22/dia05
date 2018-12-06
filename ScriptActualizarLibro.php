<?php
include 'conexion.php';
//Variables
$id= $_POST["id_libro"];
$nombre = $_POST["nom_libro"];
$autor = $_POST["autor"];
$editorial = $_POST["editorial"];
$estado = $_POST["estado"];
//consulta sql
@mysqli_select_db($db, $conexion);
$actualizar = "UPDATE libro SET  nom_libro='$nombre', autor = '$autor',
editorial = '$editorial', estado = '$estado' WHERE id_libro = '$id'";


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
header("Location: mostrarLibros.php");
}
//cerrar conexion
mysqli_close($conexion);