<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(){
    $programas = [
        [
            'codigo' => '1',
            'nombre' => 'Ciencias Computacionales',
            'facultad' => 'Facultad de Ciencias'
        ],
        [
            'codigo' => '2',
            'nombre' => 'Ingenieria de Software',
            'facultad' => 'Facultad Ingenieria'
        ],
        [
            'codigo' => '3',
            'nombre' => 'Tecnologia Información',
            'facultad' => 'Facultad Informacion Tecnologica'
        ],
        [
            'codigo' => '4',
            'nombre' => 'Ciencias Naturales',
            'facultad' => 'Facultad de Ciencias'
        ],
        [
            'codigo' => '5',
            'nombre' => 'Ciencias Sociales',
            'facultad' => 'Facultad de Ciencias'
        ]     

    ];

    $estudiantes=[
        [
            'Codigo'=>'123',
            'Nombre'=>'Juanito',
        ],
        [
            'Codigo'=>'456',
            'Nombre'=>'Pedro',
        ]
    ] ;
        return view('program.list',['program'=>$programas,'student'=>$estudiantes]);
    }

    public function register(){
        return view('program.register_form');
    }

    public function update(){
        return view('program.update_form');
    }
}
