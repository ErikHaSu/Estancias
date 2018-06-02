<html>
    <header>
    <link rel = "stylesheet" type="text/css" href="style.css">
    </header>
    <body class=D_P>
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