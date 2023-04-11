<?php
include_once('db.php');
// Obtener los valores del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$contraseña =$_POST['contraseña'];

echo "Heavy Metal <br>" ;
echo "$nombre,$apellido,$contraseña";

$conectar=conn();// ejecuta las conecciones a la base de datos
$sql="INSERT INTO users (nombre , apellido, contraseña)
VALUES ('$nombre','$apellido','$contraseña')";
$result = mysqli_query($conectar , $sql)or trigger_error("Query Failed! SQL- Error: ".mysqli_error($conectar), E_USER_ERROR);

echo "$sql";

?>