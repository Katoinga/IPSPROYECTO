@extends('plantilla')
		@section('content')
		<div id="banner" class="container">
			<div class="title">
				<h2>UNIVERSIDADES ACREDITADAS</h2>
			</div>
		</div>
	</div>
	<center>

	<div class = "col-md-4">
		<form action="/universidades/busqueda/search" method="get">
			<div class="input-group">
				<input type="search" name="querySearch" class="form-control">
				<span class="input-group-prepend">
					<button  type="submit" class="btn btn-secondary"> Search</button>
				</span>
			</div>
		</form>
	</div>
</center>
	<div class="container">
		<nav class="navbar navbar-light bg-light">
		  <a class="navbar-brand">Filtros de Busqueda</a>
			<form class="form-inline" action="/universidades/busqueda" method="get">
			  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Región</label>
				<select class="custom-select my-1 mr-sm-2" name="queryRegion" id="inputRegion">
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
					<th scope="col">Mas Detalles</th>
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
								 <td>	<li><a href="ver/<?php echo $universidad->nombre ?>">Ver mas</a></li>
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
	@endsection
