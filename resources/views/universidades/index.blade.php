<html>
<head>
	<title>UNIVERSIDADES ACREDITADAS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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
	<div class="container">



		<table class="table table-striped">
		  <thead>
		    <tr class="thead-dark">
		      <th scope="col">Universidad</th>
		      <th scope="col">Estado de Licenciamiento</th>
					<th scope="col">Mas Detalles</th>
		    </tr>
		  </thead>
		  <tbody>
				<?php
        if($universidades ?? ''):
          foreach($universidades ?? '' as $universidad):?>
		      <tr>
					       <td><?php echo $universidad->nombre;?></td>
					       <td><?php echo $universidad->estado_licenciamiento ?></td>
								 <td>	<li><a href="#"  title="">Ver mas</a></li>
		      </tr>
          <?php
          endforeach;
				endif;
        ?>
		  </tbody>
		</table>
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
