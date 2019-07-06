@extends('plantilla')
@section('seccion')
<h2>Editar formulario {{$notas->id}}</h2>

@if(session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
    @endif
<form action="{{route('notas.update',$notas->id)}}" method="POST">
@method('PUT')
     @csrf
        @error('nombre')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                El nombre es obligatorio
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
       @if ($errors->has('descripcion'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                La descripcion es obligatoria
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        
        <input type="text" 
        name="nombre" 
        placeholder="nombre"
        class="form-control mb-2" 
        value="{{$notas->nombre}}"> 


        <input type="text" 
        name="descripcion" 
        placeholder="descripcion" 
        class="form-control mb-2" 
        value="{{$notas->descripcion}}"> 
        <button class="btn btn-warning btn-block" type="submit">Editar</button>
    </form>
@endsection