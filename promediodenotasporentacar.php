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
        data.addColumn('number', 'Slices');
		<? 
		$sql="SELECT nombre_rentacar, COUNT( nombre_sucursal ) , CAST( AVG( nota_evalua ) AS DECIMAL( 2, 1 ) ) AS 
		'Promedio de Rentacar'
		FROM evalua, sucursal, rentacar
		WHERE evalua.id_sucursal = sucursal.id_sucursal
		AND sucursal.id_rentacar = rentacar.id_rentacar
		GROUP BY nombre_rentacar
		ORDER BY  `Promedio de Rentacar` DESC 
		LIMIT 0 , 30";
			$rec=mysql_query($sql);
			while($row=mysql_fetch_array($rec)){
					$nombre=$row['nombre_rentacar'];
					$nota=$row['Promedio de Rentacar'];
			echo " data.addRows([
				['$nombre',$nota],
				]);";
				}
		?>
 

        // Set chart options
        var options = {'title':'Gráfico de Rent a Car mejor evaluados por usuarios del servicio',
                       'width':600,
                       'height':400};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
</html>