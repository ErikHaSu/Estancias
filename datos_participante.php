<!Doctype html>
<html>
        <head>
              <meta charset="utf-8">
              <!-- UIkit CSS -->
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.5/css/uikit.min.css" />
              <link rel="stylesheet" href="css/style.css">
              <!-- UIkit JS -->
              <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.5/js/uikit.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.5/js/uikit-icons.min.js"></script>
        </head>
<body>
<nav class="uk-navbar-container" id="nav" uk-navbar>
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#"> Educación Vial</a></li>
    </div>
    <div class="uk-navbar-right">

        <ul class="uk-navbar-nav">
          <li class="uk-active"><a href="index.php" uk-toggle><span class="uk-icon-button uk-margin-small-right" uk-icon="reply"></span>Regresar</a></li>
        </ul>
    </div>
</nav>
            <div >
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
    <footer id="footer">
    <a href="https://twitter.com" class="uk-icon-button uk-margin-right" uk-icon="twitter"></a>
    <a href="https://facebook.com" class="uk-icon-button  uk-margin-right" uk-icon="facebook"></a>
    <a href="https://youtube.com" class="uk-icon-button" uk-icon="youtube"></a>
    </footer>
</html>