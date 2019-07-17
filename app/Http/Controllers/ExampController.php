<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;

class ExampController extends Controller
{
    public function index() {
        $estudiantes = Estudiante::all();
        foreach ($estudiantes as $estudiante) {
            echo $estudiante->nombre . '->' . $estudiante->promedio . '->' . $estudiante->estado->estado . '<br>';
        }   

        echo('<br>');
        echo('Mejor promedio: ');
        $maxValue = Estudiante::orderBy('promedio', 'desc')->first(); // gets only the id
        //var_dump($maxValue);
        echo($maxValue->nombre . ' - ' . $maxValue->promedio);

        echo('<br>');
        echo('Peor promedio: ');
        $maxValue = Estudiante::orderBy('promedio', 'asc')->first(); // gets only the id
        //var_dump($maxValue);
        echo($maxValue->nombre . ' - ' . $maxValue->promedio);
    }
}
