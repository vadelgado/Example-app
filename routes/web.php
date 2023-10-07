<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ProgramController;

Route::get('/', [HomeController::class, 'index'] );
Route::get('/estudiantes', [StudentController::class, 'index'] );
Route::get('/docentes', [TeacherController::class, 'index'] );
Route::get('/facultades', [FacultyController::class, 'index'] );
Route::get('/facultades/registro', [FacultyController::class, 'register'] );
Route::get('/facultades/actualizacion', [FacultyController::class, 'update'] );
Route::get('/programas',[ProgramController::class, 'index']);
Route::get('/programas/registro',[ProgramController::class, 'register']);
Route::get('/programas/actualizacion',[ProgramController::class, 'update']);

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/estudiantes', function () {
    return view('students');
});

Route::get('/docentes', function () {
    return view('teachers');
});


Route::get('/programas', function () {
    return view('program.programs');
});

Route::get('/facultades', function () {
    return view('faculty.faculties');
});

Route::get('/academica/calificaciones', function () {
    return view('academica.score.scores');
});

Route::get('/reporte/{codigo}', function ($codigo) {
    return 'El codigo estudiantel es:'.$codigo;
});

Route::get('/informe/{codigo}', function ($codigo) {
    return  "El # del informe es 🤷‍♀️ es:.{$codigo}";
})->where('codigo','[a,e,i,o,u,A,E,I,O,U]+');

Route::get('/documento/{nombre}/{apellido?}', function ($nombre,$apellido=null) {
    return  "🐱‍🐉 El Nombre es: {$nombre} 😜 El Apellido es: 🎂 {$apellido} 🐱‍👤";
});

Route::get('/tarea/avanzada', function () {
    return view('avanzada.tarea.ej1');
});

Route::get('/tarea/avanzada/ejemplo', function () {
    return view('avanzada.tarea.ej2');
});

Route::get('/taller/{nombre}/{correo}/{telefono}', function ($nombre,$apellido,$telefono) {
    return  "🐱‍🐉 El Nombre es: {$nombre} 😜 El correo es: 🎂 {$apellido} 🐱‍👤 El telèfono es: 🎂 {$telefono} 🐱‍👤";
})->where('telefono','[0-9]+')
->where('nombre','[a-z, A-Z]+');

Route::get('/actividad/{codigo}/{edad?}', function ($codigo,$edad=null) {
    return  "🐱‍🐉 El Codigo es: {$codigo} 😜 La edad es:  (●'◡'●): {$edad} 🐱‍👤";
})->where('edad','[0-9]+');*/