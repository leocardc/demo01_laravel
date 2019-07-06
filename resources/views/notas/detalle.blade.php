@extends('plantilla')
@section('seccion')
<h1>Detalle de la nota</h1>
<h4>Nombre: {{ $notas->nombre }}</h4>
<h4>Detalle: {{ $notas->descripcion }}</h4>
@endsection