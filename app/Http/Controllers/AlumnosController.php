<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnos;

class AlumnosController extends Controller
{

    // Funcion para mostrar informacion de todos los Alumnos.

    public function showAll() {

        return Alumnos::paginate();
    }

    
}
