<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroControlador extends Controller
{
    public function index()
    {
        $libros = Libro::all(); // Obtiene todos los libros de la base de datos
        return view('index', compact('libros')); // Pasa los datos a la vista
    }
}


