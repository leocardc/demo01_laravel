@extends('plantilla')
@section('seccion')
<h1>Este es mi equipo de trabajo</h1>
@foreach($equipo as $item)
<a href="{{ route('nosotros',$item) }}" class="h4 text-danger"> {{ $item }} </a>     <br>
@endforeach

@if(!empty($nombre))
@switch($nombre)
@case($nombre=='Leo')
<h2 class="my-5">El nombre es {{$nombre}}:</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim possimus magni atque,
 eum harum minima non ullam placeat ipsam. Dignissimos, autem? Quia blanditiis recusandae 
 minima nihil corporis maxime dolores esse.</p>
 @break
 @case($nombre=='Jose')
<h2 class="my-5">El nombre es {{$nombre}}:</h2>
<p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim possimus magni atque,
 eum harum minima non ullam placeat ipsam. Dignissimos, autem? Quia blanditiis recusandae 
 minima nihil corporis maxime dolores esse.</p>
 @break
 @case($nombre=='Luciana')
<h2 class="my-5">El nombre es {{$nombre}}:</h2>
<p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim possimus magni atque,
 eum harum minima non ullam placeat ipsam. Dignissimos, autem? Quia blanditiis recusandae 
 minima nihil corporis maxime dolores esse.</p>
 @break
@endswitch
@endif
@endsection 

