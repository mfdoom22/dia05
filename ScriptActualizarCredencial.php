<?php
include 'conexion.php';
//Variables
$id= $_POST["id_credencial"];
$rut = $_POST["rut"];
$nombre = $_POST["nombre"];
$nom_biblio = $_POST["nom_biblioteca"];

//consulta sql
@mysqli_select_db($db, $_conexion);
$actualizar = "UPDATE credencial SET rut = '$rut',
nombre = '$nombre', nom_biblioteca = '$nom_biblio' WHERE id_credencial = '$id'";


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
header("Location: mostrarCredencial.php");
}
//cerrar conexion
mysqli_close($conexion);