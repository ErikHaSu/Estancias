<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <link rel = "stylesheet" type="text/css" href="style.css">
                
        </head>
<body>
<h3>Formulario de datos del participante </h3>
<div>
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
</div>

</body>
</html>