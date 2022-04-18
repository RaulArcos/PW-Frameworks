
@extends('layouts.header')
@section('contenido')
    <h2>Bienvenido a la web sobre artículos</h2>
    <a href=" {{route('insertar_articulo')}}" title="Añadir articulo">Añadir articulo</a>
   
    @if (Auth::check())
      <button type="button" class="btn btn-primary">{{Auth::user()->name}}</button>
       <form method="POST" action="{{ route('logout') }}">
            @csrf
                <x-jet-dropdown-link href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    <img alt="" src="/img/cerrarSesion.png" width="45" height="45" />
                       </x-jet-dropdown-link>
                     </form>
    @endif
    
    <p>Estos son los artículos publicados.</p>
    @foreach($articulos as $fila)
        <a href="{{ route('un_articulo', ['art'=>$fila->id]) }} " title="Ver articulo">
        <h2>{{$fila->titulo}}</h2></a>
        <p> {{$fila->descripcion }}</p>
        <br/>
    @endforeach

    {{$articulos->render()}}

@endsection