@extends('plantilla')
@section ('contentHead')
<div class="container">
  <div class="titulo">
    ¡Consulta si tu universidad está licenciada!
  </div>
  <p class="subtitulo">Base de datos alimentada de datos oficiales del SUNEDU.</p>
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

  <div class="container"style="padding-top:30px;padding-bottom:30px;background-color:#eee">
    <div class="row">
      <div class="col-md-6" style="padding-right:80px; padding-left:80px">
        <div class="card mb-6 shadow-sm" >
          <img src="img/Unsa.jpg" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" alt="">
          <div class="card-body">
            <h3 class="car-text">Universidad Nacional de San Agustín</h3>
            <p class="card-text">Fue acreditada en el año 2017 </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a class="btn btn-sm btn-outline-secondary " href={{ url('universidades/ver/302') }}>
                  Ver
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6" style="padding-right:80px; padding-left:80px" >
        <div class="card mb-6 shadow-sm">
          <img src="img/Catolica.jpg" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" alt="">
          <div class="card-body">
            <h3 class="car-text">Universidad Catolica de Santa Maria</h3>
            <p class="card-text">Fue acreditada en el año 2018</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a class="btn btn-sm btn-outline-secondary " href={{ url('universidades/ver/401') }}>
                  Ver
                </a>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
