@extends('plantilla')
@section ('contentHead')
<div id="banner" class="container">
  <div class="titulo">
       Decreto Supremo
  </div>
  <div class="subtitulo">
    Nueva Ley Universitaria 30220-2014
  </div>
</div>

@endsection
@section('content')

<div class="container decreto center ">
  <embed src="Ley-universitaria-30220.pdf#toolbar=1&navpanes=0&scrollbar=0" class="decreto" type="application/pdf" width="90%" height="600px" />
</div>


@endsection
