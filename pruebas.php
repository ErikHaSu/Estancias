<!DOCTYPE html>
<html>
        <head>
            <meta charset="utf-8">
            <!-- UIkit CSS -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.5/css/uikit.min.css">
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
                    <li class="uk-active"><a href="estadisticas.php"> Estadisticas </a></li>
                    <li class="uk-active"><a href="#"> Info </a></li>
                </ul>
        
            </div>
            <div class="uk-navbar-right">
        
                <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="escuela.html"><span class="uk-icon-button uk-margin-small-right" uk-icon="pencil"></span>Registrar escuela</a></li>
                <li class="uk-active"><a href="participante.php"><span class="uk-icon-button uk-margin-small-right" uk-icon="user"></span>Registrar participante</a></li>
                </ul>
            </div>
        </nav>
    <h1>Formulario de datos escolares </h1>
<div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light"
     data-src="https://images.unsplash.com/photo-1490822180406-880c226c150b?fit=crop&w=650&h=433&q=80"
     data-srcset="https://images.unsplash.com/photo-1490822180406-880c226c150b?fit=crop&w=650&h=433&q=80 650w,
                  https://images.unsplash.com/photo-1490822180406-880c226c150b?fit=crop&w=1300&h=866&q=80 1300w"
     data-sizes="(min-width: 650px) 650px, 100vw" uk-img>
</div>
    <a class="uk-button uk-button-default" href="#modal-full" uk-toggle>Open</a>
    <div class="modal">
        <div id="modal-full" class="uk-modal-full" uk-modal>
            <div class="uk-modal-dialog">
                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                <form method="post" class="uk-form-horizontal uk-margin-large" action="datos_escuela.php">
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

                            <div class="uk-modal-footer uk-text-right"> 
                            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                            <button class="uk-button uk-button-default" type="submit" value="Submit" >Submit</button>
                            </div>
                        </form>
            </div>
        </div>
    </div>

    <a class="uk-button uk-button-default" href="#modal-sections" uk-toggle>Open</a>

    <div id="modal-sections" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title">Modal Title</h2>
            </div>
            <div class="uk-modal-body">
            <form method="post" class="uk-form-horizontal uk-margin-large" action="datos_escuela.php">
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
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                <button class="uk-button uk-button-primary" type="submit" value="Submit">Save</button>
            </div>
            </form>
        </div>
    </div>


<footer id="footer">
    <a href="" class="uk-icon-button uk-margin-right" uk-icon="twitter"></a>
    <a href="" class="uk-icon-button  uk-margin-right" uk-icon="facebook"></a>
    <a href="" class="uk-icon-button" uk-icon="google-plus"></a>
</footer>
</body>
</html>
