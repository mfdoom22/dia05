<?php
include 'conexion.php';
//Variables

$id_libro = $_POST["id_libro"];
$nom_libro = $_POST["nom_libro"];
$autor = $_POST["autor"];
$estado = $_POST["estado"];


//consulta sql
$insertar = "INSERT into libro(id_libro, nom_libro , autor, estado) values
('$id_libro', '$nom_libro','$autor', '$estado')";
$verificar = mysqli_query($conexion, "SELECT * from libro where id_libro = '$id_libro'");

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
window.history.go(-1);
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