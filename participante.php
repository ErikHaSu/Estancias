<!DOCTYPE html>
<html>
        <head>
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
            <li class="active"><a href="index.html">Inicio</a></li>
            
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Empresa<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Mision</a></li>
                <li><a href="#">Vision</a></li>
                <li><a href="#">Valores</a></li>
              </ul>
            </li>
            <li><a href="#">Estadisticas</a></li>
            <li><a href="#">info</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="escuela.html"><span class="glyphicon glyphicon-user"></span> Registrar Escuela</a></li>
            <li><a href="participante.php"><span class="glyphicon glyphicon-log-in"></span> Registrar Alumno</a></li>
          </ul>
        </div>
      </nav>
<h3>Formulario de datos del participante </h3>
<div class="container">
    <form method="post"class="form-horizontal" action="datos_participante.php">
        <div class="form-group">
          <label class="control-label col-sm-2" for="nombre">Nombre del estudiante</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nombre" placeholder="Nombre del participante.." name="nombre">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="ap_paterno">Apellido paterno</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="ap_paterno" placeholder="Apellido paterno.." name="ap_paterno">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="ap_materno">Apellido materno</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="ap_materno" placeholder="Apellido materno.." name="ap_materno">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="edad">Edad</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="edad" placeholder="Edad.." name="edad">
        </div>
        <div class="form-group">
              <div class="col-xs-2">
                <label for="sexo">Genero</label>
                  <select class="form-control" name="sexo" id="sexo">
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                  </select>
              </div>
        </div>
        <div class="form-group">
          <div class="col-xs-2">
          <label for="escuela">Escuela</label>
            <select class="form-control" name="escuela" id="escuela">
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
        <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default"value="Submit">Submit</button>
        </div>
    </form>
</div>
<!--<div>
  <form  method="post" action="datos_participante.php" >
    <label for="nombre">Nombre del estudiante</label>
    <input type="text" id="nombre" name="nombre" placeholder="Nombre del participante..">

    <label for="ap_paterno">Apellido paterno</label>
    <input type="text" id="ap_paterno" name="ap_paterno" placeholder="Apellido Paterno...">

    <label for="ap_materno">Apellido materno</label>
    <input type="text" id="ap_materno" name="ap_materno" placeholder="Apellido Materno..">

    <label for="edad">Edad</label>
    <input type="text" id="edad" name="edad" placeholder="Edad participante.."> 
    
    <label for="sexo">Sexo</label>
    <select id="sexo" name="sexo">
    <option value="M">Masculino</option>
    <option value="F">Femenino</option>
   
  </select>
    <label for="escuela">Escuela</label>
        
    <select id="escuela" name="escuela">
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
    <input type="submit" value="Submit">
  </form>
</div>-->

</body>
</html>