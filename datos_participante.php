<html>
    <header>
    <title> Participante </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    </header>
    <body class=D_P>
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
            <div class = "P">
                <?php
                include("conexion.php");
                    if ( isset($_REQUEST['escuela']) && !empty($_REQUEST['escuela']) &&
                    isset($_REQUEST['nombre']) && !empty($_REQUEST['nombre']) &&
                    isset($_REQUEST['ap_paterno']) && !empty($_REQUEST['ap_paterno']) &&
                    isset($_REQUEST['ap_materno']) && !empty($_REQUEST['ap_materno']) &&
                    isset($_REQUEST['edad']) && !empty($_REQUEST['edad']) &&
                    isset($_REQUEST['sexo']) && !empty($_REQUEST['sexo']))
                    {
                        $conexion=mysqli_connect($host,$user,$pw,$bd) or
                        die("Problemas con la conexión");

                        mysqli_query($conexion,"INSERT INTO participante(escuela,nombre,ap_paterno,ap_materno,edad,sexo)
                        VALUES('$_REQUEST[escuela]','$_REQUEST[nombre]','$_REQUEST[ap_paterno]','$_REQUEST[ap_materno]',
                        '$_REQUEST[edad]','$_REQUEST[sexo]')") or
                        die("Problemas en el select".mysqli_error($conexion));
                    
                        echo "<h1>Datos insertados corretamete</h1> ";
                    }else{
                        echo "<h1>Problema al insertar datos</h1>";
                    }
                ?>
            </div>
    </body>
</html>