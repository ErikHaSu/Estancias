<?php
$host = "localhost";
$user = "Admin";
$pw = "ErikHaSu10-7";
$bd = "edu_vial_db";

$conexion=mysqli_connect($host,$user,$pw,$bd) or
                die("Problemas con la conexión");

$Act1 = $_POST ["Act1"];
$Act2 = $_POST ["Act2"];
$Act3 = $_POST ["Act3"];

mysqli_query($conexion, "INSERT INTO puntajes(act1,act2,act3)
VALUES('$Act1','$Act2','$Act3')") 
or
die("<h1>Problemas en el select:</h1>".mysqli_error($conexion));

echo " <h1> Datos insertados corretamete </h1>";

?>

