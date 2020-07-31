@extends('plantilla')
@section('contentHead')

<div id="banner" class="container">
	<div class="titulo_U">
		<?php foreach($universidades as $universidad) {
					echo $universidad->nombre;
		}?>
	</div>
</div>

@endsection
		@section('content')

	</div>
	<div class="container"  id="lista">
		<table class="table table-striped">
		  <thead>
		    <tr class="thead-dark">
		      <th scope="col" COLSPAN="2">Detalles</th>
		    </tr>
		  </thead>
		  <tbody>
				<?php
        if($universidades ?? ''):
          foreach($universidades ?? '' as $universidad):?>
		      <tr>
            <td>Nombre</td>
					       <td><?php echo $universidad->nombre;?></td>
          </tr>
          <tr>
            <td>Tipo de Gestion</td>
					       <td><?php echo $universidad->tipo_gestion ?></td>
          </tr>
          <tr>
            <td>Estado de Licenciamiento</td>
					       <td><?php echo $universidad->estado_licenciamiento ?></td>
          </tr>
          <tr>
            <td>Periodo de Licenciamiento</td>
                 <td><?php echo $universidad->periodo_licenciamiento ?></td>
          </tr>
          <tr>
            <td>Departamento</td>
					       <td><?php echo $universidad->departamento ?></td>
          </tr>
          <tr>
            <td>Provincia</td>
					       <td><?php echo $universidad->provincia ?></td>
		      </tr>
          <tr>
            <td>Distrito</td>
					       <td><?php echo $universidad->distrito ?></td>
		      </tr>
          <tr>
            <td rowspan="2">Latitud y Longitud</td>
					      <td><?php echo $universidad->latitud; echo ",".$universidad->longitud;?></td>
            <tr>
              <td><a href="https://www.google.com/maps/place/<?php echo $universidad->latitud; echo ",".$universidad->longitud;?>" target="_blank">Ver en el Mapa</a></td>
            </tr>
		      </tr>
          <?php
          endforeach;
				endif;
        ?>
		  </tbody>
		</table>
	</div>
	@endsection
