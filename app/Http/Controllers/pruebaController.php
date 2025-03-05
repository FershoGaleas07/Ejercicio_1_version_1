<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pruebaController extends Controller
{
    public function prueba(){
        return "estamos en ventana de prueba";
    }
    public function prueba2($valor){
        return view('prueba.prueba2',
            ['valor' => $valor]);
    }
}
