@extends('plantilla')
		@section('content')
		<div id="banner" class="container">
			<div class="title">
				<h2>UNIVERSIDADES ACREDITADAS</h2>
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
									 <td>	<li><a href="universidades/ver/<?php echo $universidad->nombre ?>">Ver mas</a></li>
			      </tr>
	          <?php
	          endforeach;
					endif;
	        ?>
			  </tbody>
			</table>
		</div>
		@endsection
