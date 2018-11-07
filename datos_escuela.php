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
            <li class="uk-active"><a href="index.php"> Educación Vial</a></li>
    </div>
    <div class="uk-navbar-right">

        <ul class="uk-navbar-nav">
          <li class="uk-active"><a href="index.php" uk-toggle><span class="uk-icon-button uk-margin-small-right" uk-icon="reply"></span>Regresar</a></li>
        </ul>
    </div>
  </nav>
    <?php
    include("graficas/pconexionp/abrir_conexion.php");

    if (isset($_REQUEST['nombre']) && !empty($_REQUEST['nombre']) &&
        isset($_REQUEST['clave']) && !empty($_REQUEST['clave']) &&
        isset($_REQUEST['localidad']) && !empty($_REQUEST['localidad']))
        {
        mysqli_query($link, "INSERT INTO escuelas(nombre,clave,localidad)
        VALUES('$_REQUEST[nombre]','$_REQUEST[clave]','$_REQUEST[localidad]')")  or
            die("<h1>Problemas en el select:</h1>".mysqli_error($link));
        
        echo " <h1> Datos insertados corretamete  </h1>";
        }else{
            echo "<h1> problema al insertar datos </h1>";
        }
        include("graficas/pconexionp/cerrar_conexion.php");
    ?>
</body>
<footer id="footer">
    <a href="https://twitter.com" class="uk-icon-button uk-margin-right" uk-icon="twitter"></a>
    <a href="https://facebook.com" class="uk-icon-button  uk-margin-right" uk-icon="facebook"></a>
    <a href="https://youtube.com" class="uk-icon-button" uk-icon="youtube"></a>
</footer>
</html>