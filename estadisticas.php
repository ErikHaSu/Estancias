<!Doctype html>
<html>
        <head>
              <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <!-- UIkit CSS -->
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.5/css/uikit.min.css" />
              <link rel="stylesheet" href="css/style.css">
              <!-- UIkit JS -->
              <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.5/js/uikit.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.5/js/uikit-icons.min.js"></script>
              <script src="code/highcharts.js"></script>
              <script src="code/modules/data.js"></script>
              <script src="code/modules/drilldown.js"></script>
              <style type="text/css">

              </style>
        </head>
<body>
  <nav class="uk-navbar-container" id="nav"  uk-navbar>
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
  <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<?php 
    include("conexion.php");
    $link = conect();
    $con = mysql_query("SELECT * FROM puntaje",$link);

    $count = mysql_query("SELECT count(*) FROM puntaje",$link);
    $ctdr = mysql_result($count, 0);
?>
<script type="text/javascript">
// Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Promedio total de puntos por actividad'
    },
   
    xAxis: {
  
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Puntajes'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> En total<br/>'
    },

    "series": [

        {
            "name": "Puntajes",
            "colorByPoint": true,
            "data": [
            <?php
            while ($row = mysql_fetch_array($con)) {
                $contador += $row["act1"];
                $prom = $contador / $ctdr;

                $contador2 += $row["act2"];
                $prom2 = $contador2 / $ctdr;

                $contador3 += $row["act3"];
                $prom3 = $contador3 / $ctdr;
            }
            echo "['Ruta 1',".$prom.",'Ruta 1'],"; 
            echo "['Ruta 2',".$prom2.",'Ruta 2'],";
            echo "['Ruta 3',".$prom3.",'Ruta 3'],";
            ?>    
            ]
        }
    ]
});
</script>
  
</body>
<footer id="footer">
    <a href="https://twitter.com" class="uk-icon-button uk-margin-right" uk-icon="twitter"></a>
    <a href="https://facebook.com" class="uk-icon-button  uk-margin-right" uk-icon="facebook"></a>
    <a href="https://youtube.com" class="uk-icon-button" uk-icon="youtube"></a>
</footer>
</html>