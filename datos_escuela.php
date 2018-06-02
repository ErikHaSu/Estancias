<html>
    <head>
        <title> Escuela </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    </head>
<body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand">Educacion vial</a>
              </div>
              <ul class="nav navbar-nav">
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html"><span class="glyphicon glyphicon-chevron-left"></span> Regresar</a></li>
              </ul>
            </div>
          </nav>
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