<html>
<head>
  <title> Universidades</title>
</head>
<body>
  <div id="menu">
			<ul>
				<li><a href="#" title="">Universidades</a></li>
				<li><a href="#" title="">Reportes</a></li>
				<li><a href="#" title="">Decreto</a></li>
			</ul>
	</div>
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
  </form>

</body>
</html>
