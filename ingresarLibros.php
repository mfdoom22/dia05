<?php
include 'conexion.php';
//Variables
$id= $_POST["id_libro"];
$nombre = $_POST["nom_libro"];
$autor = $_POST["autor"];
$editorial = $_POST["editorial"];
$estado = $_POST["estado"];


//consulta sql
$insertar = "INSERT into libro(id_libro, nom_libro ,autor, editorial, estado) values
('$id', '$nombre','$autor', '$editorial', '$estado')";
$verificar = mysqli_query($conexion, "SELECT * from libro where id_libro = '$id'");

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