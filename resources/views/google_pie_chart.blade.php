<!DOCTYPE html>
<html>
 <head>
  <title>Make Google Pie Chart in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <style type="text/css">
   .box{
    width:800px;
    margin:0 auto;
   }
  </style>
  <script type="text/javascript">
   var analytics = <?php echo $estado_licenciamiento; ?>

   google.charts.load('current', {'packages':['corechart']});

   google.charts.setOnLoadCallback(drawChart);

   function drawChart()
   {
    var data = google.visualization.arrayToDataTable(analytics);
    var options = {
     title : 'Porcentaje de universidades licenciadas'
    };
    var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
    chart.draw(data, options);
   }
  </script>
 </head>
 <body>
   <div id="header" class="container">
 		<div id="menu" class="container">
 			<ul>
 				<li><a href="#" accesskey="1" title="">Universidades</a></li>
 				<li><a href="#" accesskey="2" title="">Reportes</a></li>
 				<li><a href="#" accesskey="3" title="">Decreto</a></li>
 			</ul>
 		</div>
 		<div id="banner" class="container">
 			<div class="title">
 				<h2>UNIVERSIDADES ACREDITADAS</h2>
 			</div>
 		</div>
 	</div>
  <br />
  <div class="container">
   <h3 align="center"> Reportes</h3><br />

   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">Porcentaje de universidades licenciadas</h3>
    </div>
    <div class="panel-body" align="center">
     <div id="pie_chart" style="width:750px; height:450px;">

     </div>
    </div>
   </div>

  </div>
  <div id="copyright" class="container">
		<h3>Contactanos</h3>
		<ul>
			<li><p>cgonzalesmo@unsa.edu.pe</p>
			<li><p>ssonccoc@unsa.edu.pe</p>
			<li><p>evaldiviaci@unsa.edu.pe</p>
			<li><p>mcarpioco@unsa.edu.pe</p>
			<li><p>fbarrientos@unsa.edu.pe</p>
		</ul>
	</div>
 </body>
</html>
