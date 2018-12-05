<?php
include 'conexion.php';
//Variables
$id= $_POST["id_credencial"];
$rut = $_POST["rut"];
$nombre = $_POST["nombre"];
$nom_bib = $_POST["nom_biblioteca"];


//consulta sql
$insertar = "INSERT into credencial(id_credencial, rut ,nombre, nom_biblioteca) values
('$id', '$rut','$nombre', '$nom_bib')";
$verificar = mysqli_query($_conexion, "SELECT * from credencial where id_credencial = '$id'");

if(mysqli_num_rows($verificar) > 0){
echo' <script>
alert("ERROR:id ya está ingresado");
window.history.go(-1);
</script>';
exit;
}

//ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado){
echo' <script>
alert("Error al registrar personal");

</script>';
} else{
echo' <script>
alert("Registro ingresado correctamente");
window.history.go(-1);
</script>';
}
//cerrar conexion
mysqli_close($conexion);

?>