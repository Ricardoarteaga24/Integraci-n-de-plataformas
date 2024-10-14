<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $table = 'libros'; // Nombre de la tabla en la base de datos
    protected $fillable = ['titulo', 'precio']; // Campos que se pueden llenar
}
