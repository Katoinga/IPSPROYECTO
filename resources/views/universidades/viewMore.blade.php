@extends('plantilla')
@section('contentHead')

<div class="container">
  <div class="titulo">
    Universidades en el Perú
  </div>
  <div class="buscar">
		<form action={{ url('universidades/busqueda/search') }} method="get">
	    <div class="row">
	      <div class="col-8">
	        <input class="inputBuscar" type="search" name="querySearch" placeholder="Busca una universidad">
	      </div>
	      <div class="col-4">
	        <input type="submit" value="Enviar" class="boton">
	      </div>
	    </div>
		</form>
  </div>
</div>

@endsection
@section('content')

	<div class="container" id="lista" >
    <div class="container" >
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link botonView " href={{ url('universidades')}}>Lista de Univ.</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active botonView" href={{ url('universidades/busqueda')}}>Filtros de Univ.</a>
        </li>
      </ul>
    </div>
		<nav class="navbar navbar-light bg-light">
		  <a class="navbar-brand">Filtros de Busqueda</a>
			<form class="form-inline" method="get" action= {{ url('universidades/busqueda') }}>
				<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Tipo de gestion</label>
				<select class="custom-select my-1 mr-sm-2" name="queryGestion" id="inputGestion">
			    <option value="">Ninguno</option>
					<option>Público</option>
					<option>Privado</option>
			  </select>
				<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Licenciamiento</label>
				<select class="custom-select my-1 mr-sm-2" name="queryLic" id="inputLic">
			    <option value="">Ninguno</option>
					<option>Revision</option>
					<option>Otorgada</option>
					<option>Denegada</option>
					<option value="Observ">Observacion</option>
			  </select>
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
								 <td class="center">
									 <a class="botonView" href={{ url('universidades/ver',$universidad->id) }}>
										 <svg width="27px" height="25px" viewBox="0 0 16 16" style="margin-left:15px" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
											<path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
										</svg>
									 </a>
								</td>
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
