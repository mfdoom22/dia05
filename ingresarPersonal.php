<?php
include 'conexion.php';
//Variables
$id= $_POST["id"];
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$cargo = $_POST["cargo"];



//consulta sql
$insertar = "INSERT into personal(id, nombre ,edad, cargo) values
('$id', '$nombre','$edad', '$cargo')";
$verificar = mysqli_query($conexion, "SELECT * from personal where id = '$id'");

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