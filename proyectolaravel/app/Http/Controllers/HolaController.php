<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    public function welcome() {
        return view ('welcome');
    }
    public function saludo($nombre){
        return "Hola {$nombre}, bienvenido a mi primer controlador en Laravel";
    }
    public function saludo2($nombre, $edad){
        return "Hola ($nombre}, tienes ($edad} años";
    }
}
