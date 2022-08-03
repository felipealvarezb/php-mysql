<?php

include_once('db.php');

$nombre = $_POST['nombre'];

$sql = "INSERT INTO estudiantes (Nombre) VALUES ('$nombre')";
$resultado = mysqli_query($conectar, $sql) or trigger_error("Query Failed! SQL-Error: ".mysqli_error($conectar), E_USER_ERROR);

echo "Se guardo correctamente";
?>