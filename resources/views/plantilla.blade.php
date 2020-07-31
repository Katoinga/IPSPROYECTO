<html>
<head>
	<title>UNIVERSIDADES ACREDITADAS</title>

	<link rel="stylesheet" href="{{ asset('css/estilo.css') }}" />
	<link href="https://allfont.es/allfont.css?fonts=open-sans-bold" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>
<body>
	<div id="header" class="container">
			<ul>
				<div class="menu">
					<a href={{ url('/') }} class="boton" role="button">HOME</a>
					<a href={{ url('universidades') }} class="boton" role="button">UNIVERSIDADES</a>
		      <a href={{ url('reportes') }} class="boton" role="button">REPORTES</a>
		      <a href={{ url('decretoSupremo') }} class="boton" >DECRETO</a>
				</div>
			</ul>
				@yield('contentHead')
			<br>
	</div>
  @yield('content')

	<div id="copyright" class="container">
		<h3>Contactanos</h3>
		<ul>
			<li>cgonzalesmo@unsa.edu.pe
			<li>ssonccoc@unsa.edu.pe
			<li>evaldiviaci@unsa.edu.pe
			<li>mcarpioco@unsa.edu.pe
		</ul>
	</div>

</body>
</html>
