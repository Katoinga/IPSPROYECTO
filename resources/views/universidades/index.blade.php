@extends('plantilla')
@section ('contentHead')
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


		<div class="container" id="lista">

			<table class="table table-striped">
			  <thead>
			    <tr class="thead-dark">
			      <th scope="col">Universidad</th>
			      <th scope="col">Estado de Licenciamiento</th>
						<th scope="col">Mas Detalles</th>
			    </tr>
			  </thead>
				<div class="container" style="margin-bottom:20px;">
					<ul class="nav nav-tabs">
					  <li class="nav-item">
					    <a class="nav-link active botonView" href={{ url('universidades')}}>Lista de Univ.</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link botonView" href={{ url('universidades/busqueda')}}>Filtros de Univ.</a>
					  </li>
					</ul>
				</div>

			  <tbody>
					<?php
	        if($universidades ?? ''):
	          foreach($universidades ?? '' as $universidad):?>
			      <tr>
						       <td><?php echo $universidad->nombre;?></td>
						       <td><?php echo $universidad->estado_licenciamiento ?></td>
									 <td class="center">
										 <a class="botonView" href={{ url('universidades/ver',$universidad->id)}}>
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
@endsection
