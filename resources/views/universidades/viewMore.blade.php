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
		<nav class="navbar navbar-light bg-light">
		  <a class="navbar-brand">Filtros de Busqueda</a>
			<form class="form-inline">
			  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Región</label>
				<select class="custom-select my-1 mr-sm-2" name="queryRegion" id="inputRegion">
			    <option value="">Ninguno...</option>
					<option>Amazonas</option>
					<option>Ancash</option>
					<option>Apurimac</option>
					<option>Arequipa</option>
					<option>Ayacucho</option>
					<option>Cajamarca</option>
					<option>Callao</option>
					<option>Cusco</option>
					<option>Huancavelica</option>
					<option>Huanuco</option>
					<option>Ica</option>
					<option>Junín</option>
					<option>La Libertad</option>
					<option>Lambayeque</option>
					<option>Lima</option>
					<option>Loreto</option>
					<option>Madre de Dios</option>
					<option>Moquegua</option>
					<option>Pasco</option>
					<option>Piura</option>
					<option>Puno</option>
					<option>San Martín</option>
					<option>Tacna</option>
					<option>Tumbes</option>
					<option>Ucayali</option>
			  </select>
				<button class="btn btn-outline-dark" type="submit">Aplicar</button>
			</form>
		</nav>


		<table class="table table-striped">
		  <thead>
		    <tr class="thead-dark">
		      <th scope="col">Universidad</th>
		      <th scope="col">Gestion</th>
		      <th scope="col">Estado de Licenciamiento</th>
		      <th scope="col">Periodo de Licenciamiento</th>
					<th scope="col">Departamento</th>
					<th scope="col">Provincia</th>
		    </tr>
		  </thead>
		  <tbody>
				<?php
        if($universidades ?? ''):
          foreach($universidades ?? '' as $universidad):?>
		      <tr>
					       <td><?php echo $universidad->nombre;?></td>
					       <td><?php echo $universidad->tipo_gestion ?></td>
					       <td><?php echo $universidad->estado_licenciamiento ?></td>
                 <td><?php echo $universidad->periodo_licenciamiento ?></td>
					       <td><?php echo $universidad->departamento ?></td>
					       <td><?php echo $universidad->provincia ?></td>
		      </tr>
          <?php
          endforeach;
				endif;
        ?>
		  </tbody>
		</table>
	</div>
	<!--Tabla Antigua de Sergito
	<nav class="navbar">
	  <a class="navbar-brand">Filtros de Busqueda</a>
	  <form class="form-inline">
			<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Region</label>
      <select name="queryRegion" id="inputRegion">
				<option value="">Ninguno</option>
        <option>Amazonas</option>
        <option>Ancash</option>
        <option>Apurimac</option>
        <option>Arequipa</option>
        <option>Ayacucho</option>
        <option>Cajamarca</option>
        <option>Callao</option>
        <option>Cusco</option>
        <option>Huancavelica</option>
        <option>Huanuco</option>
        <option>Ica</option>
        <option>Junín</option>
        <option>La Libertad</option>
        <option>Lambayeque</option>
        <option>Lima</option>
        <option>Loreto</option>
        <option>Madre de Dios</option>
        <option>Moquegua</option>
        <option>Pasco</option>
        <option>Piura</option>
        <option>Puno</option>
        <option>San Martín</option>
        <option>Tacna</option>
        <option>Tumbes</option>
        <option>Ucayali</option>
      </select>
	    <button class="button" type="submit">Aplicar</button>
	  </form>
	</nav>

  <table class="tabla">

				<tr>
					<th>Universidad</th>
					<th>Gestion</th>
					<th>Estado de Licenciamiento</th>
					<th>Periodo de Licenciamiento</th>
					<th>Departamento</th>
          <th>Provincia</th>
				</tr>
        <?php
        if($universidades ?? ''):
          foreach($universidades ?? '' as $universidad):?>
		      <tr>
					       <td><?php echo $universidad->nombre;?></td>
					       <td><?php echo $universidad->tipo_gestion ?></td>
					       <td><?php echo $universidad->estado_licenciamiento ?></td>
                 <td><?php echo $universidad->periodo_licenciamiento ?></td>
					       <td><?php echo $universidad->departamento ?></td>
					       <td><?php echo $universidad->provincia ?></td>
		      </tr>
          <?php
          endforeach;
				endif;
        ?>
		</table>
		-->
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
