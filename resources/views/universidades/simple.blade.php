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

  <table class="tabla">

				<tr>
					<th>Universidad</th>
					<th>Estado de Licenciamiento</th>

				</tr>
        <?php
        if($universidades ?? ''):
          foreach($universidades ?? '' as $universidad):?>
		      <tr>
					       <td><?php echo $universidad->nombre;?></td>
					       <td><?php echo $universidad->estado_licenciamiento ?></td>

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
