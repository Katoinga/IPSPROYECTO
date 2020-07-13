<html>
<head>
	<title>UNIVERSIDADES ACREDITADAS</title>
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

	<nav class="navbar">
	  <a class="navbar-brand">Filtros de Busqueda</a>
	  <form class="form">
			<label >Region</label>
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
