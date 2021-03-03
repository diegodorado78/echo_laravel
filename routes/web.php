<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;
use App\Http\Controllers\PageController;
use App\Http\Livewire\Categories;
use App\Http\Livewire\MateriaCrear;
use App\Http\Livewire\MateriaIndividual;
use App\Http\Livewire\Subjectlist;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/',[PageController::class,'home'])->name('home');
Route::get('materias/',[Subjectlist::class,'render'])->name('materias');//necesito llamar la fu
Route::get('categorias',[Categories::class,'render'])->name('categorias');//necesito llamar la fu

Route::get('materias/crear',[MateriaCrear::class,'render'])->name('crear');//necesito llamar la fu
Route::get('materiaI/{subject:id}',[MateriaIndividual::class,'render'])->name('materiaI');//necesito llamar la funcion para que muestre


//  Route::get('materia',[PageController::class,'subject'])->name('subject');
// Route::get('/materia',[PageController::class,'subject'])->name('subject');// binding con {}
// Route::view('materias', 'materias');
// Route::get('subject',[PageController::class,'subject'])->name('subject');


// Route::get("/", "PageController@home")->name("home");
// Route::view('/','index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Route::get('subject', Subject::class);
