<?php

use App\Http\Controllers\ArticulogeneralController;
use App\Http\Controllers\ArticulorevistaController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PdfsController;
use App\Http\Controllers\ReconocimientoController;
use App\Mail\HelloMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatospersonaController;
use App\Http\Controllers\DatospersonbController;
use App\Http\Controllers\ExpdocenteController;
use App\Http\Controllers\ExpoconferenciaController;
use App\Http\Controllers\ExpoeventoController;
use App\Http\Controllers\ExposeminarioController;
use App\Http\Controllers\ExpprograrelController;
use App\Http\Controllers\FormcursoController;
use App\Http\Controllers\FormpostgradoController;
use App\Http\Controllers\FormprofesionalController;
use App\Http\Controllers\FuncadminacadController;
use App\Http\Controllers\LibropublicadoController;
use App\Http\Controllers\TextopublicadoController;
use App\Http\Controllers\TutortribunalController;
use App\Http\Controllers\TrabproyinvconcluidoController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {

// Mail::to('miguel.vertis@esam.edu.bo')->send(new HelloMail());
// });


// dump para db
// use Illuminate\Support\Facades\Artisan;
// Artisan::call('db:seed', [
//     '--class' => 'DatabaseSeeder',
//     '--force' => true,
// ]);

Route::get('/', function () {

    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// DB::listen(function($query) {
//     dump($query->sql);
// });
Route::resource('datospersonas', DatospersonaController::class);
// Route::get('/datospersonas/pdf', [DatospersonaController::class, 'generarPDF'])->name('datospersonas.pdf');

Route::resource('datospersonbs', DatospersonbController::class);



// web.php
// Route::post('/generate-pdf', [PdfsController::class, 'generatePdf'])->name('generate.pdf');

// web.php
Route::post('/generate-pdf', [PdfsController::class, 'generatePdf'])->name('generate.pdf');


Route::resource('expdocentes', ExpdocenteController::class);
Route::resource('expoconferencias', ExpoconferenciaController::class);
Route::resource('expoeventos', ExpoeventoController::class);
Route::resource('exposeminarios', ExposeminarioController::class);
Route::resource('expprograrels', ExpprograrelController::class);
Route::resource('formcursos', FormcursoController::class);
Route::resource('formpostgrados', FormpostgradoController::class);
Route::resource('formprofesionals', FormprofesionalController::class);
Route::resource('funcadminacads', FuncadminacadController::class);
Route::resource('libropublicados', LibropublicadoController::class);
Route::resource('textopublicados', TextopublicadoController::class);
Route::resource('tutortribunals', TutortribunalController::class);
Route::resource('trabproyinvconcluidos', TrabproyinvconcluidoController::class);
Route::resource('contactos', ContactoController::class);
Route::resource('articulogenerals', ArticulogeneralController::class);
Route::resource('articulorevistas', ArticulorevistaController::class);
Route::resource('reconocimientos', ReconocimientoController::class);
