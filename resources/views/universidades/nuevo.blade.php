<html>
<head>
  <title> Universidades</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
  <div id="menu">
			<ul>
				<li><a href="#" title="">Universidades</a></li>
				<li><a href="#" title="">Reportes</a></li>
				<li><a href="#" title="">Decreto</a></li>
			</ul>
	</div>
  <!--Formulario Antiguo
  <div class="title">
			<h2>Universidades</h2>
	</div>
  <form method="POST" action={{ url('universidades') }}>
    @csrf
    <label for="Nombre">{{ 'nombre' }}</label>
    <input type="text" name="nombre" value="{{ old('nombre') }}">
    {!! $errors->first('nombre','<span style="color:red">:message</span>')!!}<br/>
    <label for="Tipo_gestion">{{ 'tipo_gestion' }}</label>
    <input type="text" name="tipo_gestion" value="{{ old('tipo_gestion')}}">
    {!! $errors->first('tipo_gestion','<span style="color:red">:message</span>')!!}<br/>
    <label for="Estado_licenciamiento">{{ 'estado_licenciamiento' }}</label>
    <input type="text" name="estado_licenciamiento" value="{{ old('estado_licenciamiento')}}">
    {!! $errors->first('estado_licenciamiento','<span style="color:red">:message</span>')!!}<br/>
    <label for="Periodo_licenciamiento">{{ 'periodo_licenciamiento' }}</label>
    <input type="number" name="periodo_licenciamiento" value="{{ old('periodo_licenciamiento')}}">
    {!! $errors->first('periodo_licenciamiento','<span style="color:red">:message</span>')!!}<br/>
    <label for="Departamento">{{ 'departamento' }}</label>
    <input type="text" name="departamento" value="{{ old('departamento')}}">
    {!! $errors->first('departamento','<span style="color:red">:message</span>')!!}<br/>
    <label for="Provincia">{{ 'provincia' }}</label>
    <input type="text" name="provincia" value="{{ old('provincia')}}">
    {!! $errors->first('provincia','<span style="color:red">:message</span>')!!}<br/>
    <label for="Distrito">{{ 'distrito' }}</label>
    <input type="text" name="distrito" value="{{ old('distrito')}}">
    {!! $errors->first('provincia','<span style="color:red">:message</span>')!!}<br/>
    <label for="Latitud">{{ 'latitud' }}</label>
    <input type="text" name="latitud" value="{{ old('latitud')}}">
    {!! $errors->first('latitud','<span style="color:red">:message</span>')!!}<br/>
    <label for="Longitud">{{ 'longitud' }}</label>
    <input type="text" name="longitud" value="{{ old('v')}}">
    {!! $errors->first('longitud','<span style="color:red">:message</span>')!!}<br/>
    <button>@lang('Send')</button>
  </form>-->
  <div class="container">
    <div class="title">
  			<h2>Añadir Universidad</h2>
  	</div>
  <form method="POST" action={{ url('universidades') }}>
  @csrf
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="Nombre">{{ 'Nombre' }}</label>
      <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="Tipo_gestion">{{ 'Tipo de Gestion' }}</label>
      <input type="text" class="form-control" name="tipo_gestion" value="{{ old('tipo_gestion') }}" required>
      <!--
      <label for="Tipo_gestion">{{ 'Tipo de Gestion' }}</label>
      <select class="custom-select" value="{{ old('tipo_gestion')}}" required>
        <option selected disabled value="">Choose...</option>
        <option>Publico</option>
        <option>Privado</option>
      </select>
    -->
    </div>
    <div class="col-md-3 mb-3">
      <label for="Estado_licenciamiento">{{'Estado de licenciamiento'}}</label>
      <input type="text" class="form-control" name="estado_licenciamiento" value="{{ old('estado_licenciamiento')}}" required>
    </div>
  </div>
  <div class="form-row">

    <div class="col-md-4 mb-3">
      <label for="Departamento">{{'Departamento'}}</label>
      <input type="text" class="form-control" name="departamento" value="{{ old('departamento')}}" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="Provincia">{{'Provincia'}}</label>
      <input type="text" class="form-control" name="provincia" value="{{ old('provincia')}}" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="Distrito">{{'Distrito'}}</label>
      <input type="text" class="form-control" name="distrito" value="{{ old('distrito')}}" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-2 mb-3">
      <label for="Periodo_licenciamiento">{{'Periodo'}}</label>
      <input type="number" class="form-control" name="periodo_licenciamiento" value="{{ old('periodo_licenciamiento')}}" required>
    </div>
    <div class="col-md-5 mb-3">
      <label for="Latitud">{{'Latitud'}}</label>
      <input type="text" class="form-control" name="latitud" value="{{ old('latitud')}}" required>
    </div>
    <div class="col-md-5 mb-3">
      <label for="Longitud">{{'Longitud'}}</label>
      <input type="text" class="form-control" name="longitud" value="{{ old('longitud')}}" required>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Enviar</button>
</form>
<!-- Content here -->
</div>
</body>
</html>
