@extends('plantilla')
@section ('contentHead')
<div id="banner" class="container">
  <div class="title">
    <center>
    <FONT FACE="sans-serif" SIZE=15 COLOR="#d6d6d6" >
     Reportes</FONT>

   </center>		</div>
</div>

@endsection
@section('content')
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <style type="text/css">
  .box{
   width:800px;
   margin:0 auto;
  }
 </style>
 <script type="text/javascript">
  var analytics = <?php echo $departamento; ?>

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



<div class="container">
 <h3 align="center"> Reportes</h3><br />
 <center>

  <div class="btn-group btn-group-justified">
    <a href="/reportes" class="btn btn-secondary" role="button">Universidades licenciadas</a>
    <a href="/reportes2" class="btn btn-secondary " role="button">Regiones</a>
    <a href="/reportes3" class="btn btn-secondary " role="button">Publico/Privado</a>
  </div>
</center>
 <div class="panel panel-default">
  <div class="panel-heading">
   <h3 class="panel-title">Porcentaje de universidades licenciadas</h3>
  </div>
  <div class="panel-body" align="center">
   <div id="pie_chart" style="width:750px; height:450px;">

   </div>
  </div>

 </script>
</head>

<div id="banner" class="container">
  <div class="title">
    <h2>Reportes</h2>
  </div>
</div>


@endsection
