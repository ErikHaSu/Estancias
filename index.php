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
            <li class="uk-active"><a href="#"> Educacion Vial</a></li>
            <li class="uk-active"><a href="#"> Inicio</a></li>
            <li class="uk-active"> 
                <a href="#"> Nosotros </a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#"> Mision </a></li>
                        <li class="uk-active"><a href="#"> Vision </a></li>
                        <li class="uk-active"><a href="#"> Valores </a></li>
                    </ul>
                </div>
            </li>
            <li class="uk-active"><a href="estadisticas.php" uk-toggle> Estadisticas </a></li>
            <li class="uk-active"><a href="#"> Info </a></li>
        </ul>

    </div>
    <div class="uk-navbar-right">

        <ul class="uk-navbar-nav">
          <li class="uk-active"><a href="#modal1" uk-toggle><span class="uk-icon-button uk-margin-small-right" uk-icon="pencil"></span>Registrar escuela</a></li>
          <li class="uk-active"><a href="#modal2" uk-toggle><span class="uk-icon-button uk-margin-small-right" uk-icon="user"></span>Registrar participante</a></li>
        </ul>
    </div>
  </nav>
    <div class="slider">
        <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="animation: scale; ratio: 8:3; autoplay: true">

        <ul class="uk-slideshow-items">
        <li>
            <img src="resources/rep.png" alt="" uk-cover>
        </li>
        <li>
            <img src="https://i.ytimg.com/vi/kxfeTcty3Do/maxresdefault.jpg" alt="" uk-cover>
        </li>
        <li>
            <img src="resources/treyarch.jpg" alt="" uk-cover>
        </li>
        </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    </div>
    </div>
    

    <div id="modal1" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title">Formulario de datos escolares</h2>
            </div>
            <div class="uk-modal-body">
                <div>
                    <form method="post" class="uk-form-horizontal uk-margin-large" action="datos_escuela.php">
                        <div class="uk-margin">
                            <label class="uk-form-label" for="nombre">Nombre de la escuela</label>
                            <div class="uk-form-controls">
                                <div class="uk-margin">
                                    <div class="uk-inline">
                                        <span class="uk-form-icon" uk-icon="icon: pencil"></span>
                                        <input type="text" class="uk-input uk-form-width-large" id="nombre" placeholder="Nombre de la escuela.." name="nombre">
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="uk-margin">
                            <label class="uk-form-label" for="clave">Clave escolar</label>
                            <div class="uk-form-controls">
                                <div class="uk-margin">
                                    <div class="uk-inline">
                                        <span class="uk-form-icon" uk-icon="icon: pencil"></span>
                                        <input type="text" class="uk-input uk-form-width-large" id="clave" placeholder="Clave escolar..." name="clave">
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="uk-margin">
                            <label class="uk-form-label" for="localidad">Localidad</label>
                            <div class="uk-form-controls">
                                <div class="uk-margin">
                                    <div class="uk-inline">
                                        <span class="uk-form-icon" uk-icon="icon: location"></span>
                                        <input type="text" class="uk-input uk-form-width-large" id="localidad" placeholder="Localidad...." name="localidad">
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
            <div class="uk-modal-footer uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancelar</button>
                <button class="uk-button uk-button-primary" type="submit" value="Submit" >Guardar</button>
            </div>
          </form>
        </div>
    </div>

    <div id="modal2" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title">Modal Title</h2>
            </div>
            <div class="uk-modal-body">
            <form method="post" class="uk-form-horizontal uk-margin-large" action="datos_participante.php">
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="nombre">Nombre del participante</label>
                                    <div class="uk-form-controls">
                                        <div class="uk-margin">
                                            <div class="uk-inline">
                                                <span class="uk-form-icon" uk-icon="icon: pencil"></span>
                                                <input type="text" class="uk-input uk-form-width-large" id="nombre" placeholder="Nombre del participante.." name="nombre">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="ap_paterno">Apellido paterno</label>
                                    <div class="uk-form-controls">
                                        <div class="uk-margin">
                                            <div class="uk-inline">
                                                <span class="uk-form-icon" uk-icon="icon: pencil"></span>
                                                <input type="text" class="uk-input uk-form-width-large" id="ap_paterno" placeholder="Apellido paterno.." name="ap_paterno">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="ap_materno">Apellido materno</label>
                                    <div class="uk-form-controls">
                                        <div class="uk-margin">
                                            <div class="uk-inline">
                                                <span class="uk-form-icon" uk-icon="icon: pencil"></span>
                                                <input type="text" class="uk-input uk-form-width-large" id="ap_materno" placeholder="Apellido materno.." name="ap_materno">
                                            </div>
                                        </div>
                                    </div>
                                </div>       
                                
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="edad">Edad</label>
                                    <div class="uk-form-controls">
                                        <div class="uk-margin">
                                            <div class="uk-inline">
                                                <span class="uk-form-icon" uk-icon="icon: pencil"></span>
                                                <input type="text" class="uk-input uk-form-width-large" id="edad" placeholder="Edad.." name="edad">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="uk-margin">
                                        <label class="uk-form-label" for="sexo">Sexo</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select uk-form-width-medium" name="sexo" id="sexo">
                                            <option value="M" > Masculino </option>
                                            <option value="F" > Femenino </option>
                                        </select>
                                    </div>
                                </div>
                        
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="escuela">Escuela</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select" name="escuela" id="sexo">
                                            <?php 
                                                    include("conexion.php");
                                                    $conexion=mysqli_connect($host,$user,$pw,$bd) or
                                                    die("Problemas con la conexión");

                                                    $registros=mysqli_query($conexion,"select id_escuela, nombre
                                                    from escuela") or
                                                        die("Problemas en el select:".mysqli_error($conexion));

                                                        while ($reg=mysqli_fetch_array($registros))
                                                        {
                                                        echo "<option value='".$reg['nombre']."'>".$reg['nombre']."</option>";
                                                        }
                                                ?>
                                            </select>
                                        </div>
                                </div> 
                </div>
                <div class="uk-modal-footer uk-text-right">
                    <button class="uk-button uk-button-default uk-modal-close" type="button">Cancelar</button>
                    <button class="uk-button uk-button-primary" type="submit" value="Submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>

</body>
<footer id="footer">
    <a href="" class="uk-icon-button uk-margin-right" uk-icon="twitter"></a>
    <a href="" class="uk-icon-button  uk-margin-right" uk-icon="facebook"></a>
    <a href="" class="uk-icon-button" uk-icon="google-plus"></a>
</footer>
</html>