@extends('layouts.header')
@section('contenido')
    <a href=" {{route('articulos')}}" title="Ver todos los articulos"> Ver todos los articulos </a>
    <p>Este es el artículo.</p>
    <h2>{{$articulo->titulo}}</h2>
    <h3>{{$articulo->descripcion}}</h3>
    <p>{{$articulo->cuerpo}}</p>
@endsection