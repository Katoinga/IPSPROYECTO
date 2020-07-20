<<<<<<< HEAD
@extends('plantilla')
=======
		@extends('plantilla')
>>>>>>> 56e532e42882d13932827c58f019b53065b98e4f
		@section('content')
		<div id="banner" class="container">
			<div class="title">
				<h2>UNIVERSIDADES ACREDITADAS</h2>
			</div>
		</div>
<<<<<<< HEAD
		<div class="container">

=======

		<div class="container">



>>>>>>> 56e532e42882d13932827c58f019b53065b98e4f
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
<<<<<<< HEAD
									 <td>	<li><a href="universidades/ver/<?php echo $universidad->nombre ?>">Ver mas</a></li>
=======
									 <td>	<li><a href="#"  title="">Ver mas</a></li>
>>>>>>> 56e532e42882d13932827c58f019b53065b98e4f
			      </tr>
	          <?php
	          endforeach;
					endif;
	        ?>
			  </tbody>
			</table>
		</div>
		@endsection
