<!DOCTYPE html>
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
            <li class="uk-active"><a href="index.php"><span class="uk-icon uk-margin-small-right" uk-icon="icon: home"></span> Inicio</a></li>
            <li class="uk-active"> 
                <a href="#"><span class="uk-icon uk-margin-small-right" uk-icon="icon: users"></span> Nosotros </a>
            </li>
            <li class="uk-active"><a href="estadisticas.php" uk-toggle><span class="uk-icon uk-margin-small-right" uk-icon="icon: world"></span> Estadisticas </a></li>
            <li class="uk-active"><a href="#"><span class="uk-icon uk-margin-small-right" uk-icon="icon: info"></span> Info </a></li>
        </ul>

    </div>
    <div class="uk-navbar-right">

        <ul class="uk-navbar-nav">
          <li class="uk-active"><a href="registros.php" uk-toggle><span class="uk-icon-button uk-margin-small-right" uk-icon="pencil"></span>Registrar escuela</a></li>
        </ul>
    </div>
  </nav>
        <div class="uk-text-primary">
            <h1 class="h1">Educación vial <img class="img" data-src="resources/stop.png" uk-img="target: .my-class"></h1>
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            
        </div>

        <div class="slider">
            <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="animation: scale; ratio: 8:3; autoplay: true">

                <ul class="uk-slideshow-items">
                <li>
                    <img class="a" src="resources/mov.jpg" alt="" uk-cover>
                </li>
                <li>
                    <img class="a" src="resources/semaforo.jpg" alt="" uk-cover>
                </li>
                <li>
                    <img class="a" src="resources/Vialidad.png" alt="" uk-cover>
                </li>
                <li>
                    <img class="a" src="resources/señales.jpg" alt="" uk-cover>
                </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
            </div>
        </div>

 

</body>
<footer id="footer">
    <a href="https://twitter.com" class="uk-icon-button uk-margin-right" uk-icon="twitter"></a>
    <a href="https://facebook.com" class="uk-icon-button  uk-margin-right" uk-icon="facebook"></a>
    <a href="https://youtube.com" class="uk-icon-button" uk-icon="youtube"></a>
</footer>
</html>