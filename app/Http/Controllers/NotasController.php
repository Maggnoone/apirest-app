<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notas;

class NotasController extends Controller
{

    // Funcion para mostrar informacion de todos los Alumnos.

    public function showNotes() {

        return Notas::paginate();
    }

    
    // Funcion para mostrar nota de un Alumno en especifico.

    public function show($cedula) {

        $notas = Notas::where('cedula', $cedula)->get();
        return $notas;
    }

    // Funcion para crear nota de un Alumno Nuevo.

    public function create(Request $request) {

        $alumno = new Notas();
        $alumno->cedula = $request->input('cedula');
        $alumno->materia = $request->input('materia');
        $alumno->nota = $request->input('nota');
        $alumno->save();

        return json_encode(['mensaje' => 'Se ha Cargado la Nota de un Alumno']);
    }

    // Funcion para borrar nota de un Alumno existente.
    
    public function delete($id) {

        Notas::destroy($id);
        return json_encode(['mensaje' => 'Se ha Eliminado la Nota de un Alumno']);
    }

    // Funcion para editar nota de un Alumno existente.

    public function edit(Request $request, $id) {

        $materia = $request->input('materia');
        $nota = $request->input('nota');

        Notas::where('id', $id)->update([
            'materia'=>$materia,
            'nota'=>$nota
            ]);

        return json_encode(['mensaje' => 'Se ha Modificado la Nota de Alumno']);
    }
}
