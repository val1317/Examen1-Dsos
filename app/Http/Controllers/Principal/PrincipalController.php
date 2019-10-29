<?php
use Illuminate\Http\Request;
namespace App\Http\Controllers\Principal;

use App\User;
use App\Http\Controllers\Controller;

//declaración de los modelos de la base de datos
use App\Models\Alumno\AlumnoModel;
use App\Models\Boleta\BoletaModel;
use App\Models\Materia\MateriaModel;

class PrincipalController extends Controller
{
    public function index()
    {
        return view('Principal\Principal2');
    }

    public function listadoMaterias(){
        return view('Materias\ListaMaterias');

    }

    public function listadoAlumnos(){
        return view('Alumnos\ListaMaterias');
    }
}
