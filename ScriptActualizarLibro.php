<?php
include 'conexion.php';
//Variables
$id_libro= $_POST["id_libro"];
$nom_libro = $_POST["nom_libro"];
$autor = $_POST["autor"];
$estado = $_POST["estado"];

//consulta sql
@mysqli_select_db($db, $_conexion);
$actualizar = "UPDATE libro SET id_libro = '$id_libro',
nom_libro = '$nom_libro', autor = '$autor' , estado = '$estado' WHERE id_libro = '$id_libro'";


//ejecutar consulta
$resultado = mysqli_query($conexion, $actualizar);
if (!$resultado){
echo' <script>
alert("Error al actualizar");

</script>';
} else{
echo' <script>
alert("Registro actualizado correctamente");
</script>';
header("Location: mostrarLibro.php");
}
//cerrar conexion
mysqli_close($conexion);