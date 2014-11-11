<?php 
	include "codigosPHP/conexion.php";
?>
<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
		
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Cantidad de Busquedas');
		<? 
			$sql="SELECT marca_busqueda, COUNT( marca_busqueda ) as 					                  'Cantidad de busquedas' 
				  FROM busqueda
				  GROUP BY marca_busqueda";
			$rec=mysql_query($sql);
			while($row=mysql_fetch_array($rec)){
					$nombre=$row['marca_busqueda'];
					$nota=$row['Cantidad de busquedas'];
			echo " data.addRows([
				['$nombre',$nota],
				]);";
				}
		?>

        // Set chart options
        var options = {'title':'Marcas m$aacute;s buscadas mes Julio 2014',
                       'width':600,
                       'height':400};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
</html>