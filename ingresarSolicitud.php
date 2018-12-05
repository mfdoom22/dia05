<?php
include 'conexion.php';
//Variables
$id= $_POST["id_solicitud"];
$id_lib = $_POST["id_libro"];
$rut = $_POST["rut"];
$fecha = $_POST["fec_soli"];



//consulta sql
$insertar = "INSERT into solicitud(id_solicitud, id_libro ,rut, fec_soli) values
('$id', '$id_lib','$rut', '$fecha')";
$verificar = mysqli_query($conexion, "SELECT * from solicitud where id_solicitud = '$id'");

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
alert("Error al registrar Cliente");

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