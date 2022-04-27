@extends('layouts.header')
@section('contenido')
    <h2>Insertar artículo</h2>
    <a href=" {{route('articulos')}}" title="Artículos"> Artículos</a>
    <!-- Abrimos FORMULARIO que se le enviará a la ruta guardar_articulo -->
    <form action="{{route('guardar_articulo')}}" method="POST">
    <!-- Para que laravel permita hacer post, evita TokenMismatchException-->
    {{csrf_field()}}

    <!-- Para insertar un texto con un name = titulo -->
    <label for="titulo">Título:</label> <br />
    <input type="text" name="titulo" class="input" value=""/> <br /><br />
    <!-- Para insertar un texto con un name = descripcion -->
    <label for="descripcion">Descripción:</label> <br />
    <textarea rows="5" name="descripcion" class="form_control"/></textarea>
    <br /><br />
    <!-- Para insertar un texto con un name cuerpo -->
    <label for="cuerpo">Cuerpo:</label> <br />
    <textarea rows="8" name="cuerpo" class="form_control"/></textarea>
    <br /> <br />
    <button type="submit" class='btn btn-primary'>Crear artículo</button>
    <!-- Cerramos el formulario -->
    </form>
@endsection