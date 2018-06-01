<html>
    <header>
    <link rel = "stylesheet" type="text/css" href="style.css">
    </header>
<body>
<?php
include("conexion.php");

if (isset($_REQUEST['nombre']) && !empty($_REQUEST['nombre']) &&
    isset($_REQUEST['clave']) && !empty($_REQUEST['clave']) &&
    isset($_REQUEST['localidad']) && !empty($_REQUEST['localidad']))
    {
        $conexion=mysqli_connect($host,$user,$pw,$bd) or
             die("Problemas con la conexión");

    mysqli_query($conexion, "INSERT INTO escuela(nombre,clave,localidad)
    VALUES('$_REQUEST[nombre]','$_REQUEST[clave]','$_REQUEST[localidad]')")  or
        die("Problemas en el select".mysqli_error($conexion));
     
    echo " <h1> Datos insertados corretamete  </h1>";
    }else{
        echo "<h1> problema al insertar datos </h1>";
    }

?>
</body>
</html>