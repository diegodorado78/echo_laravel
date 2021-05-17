<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;
use App\Http\Controllers\PageController;
use App\Http\Livewire\Subjectlist;
use App\Http\Livewire\Materialist;
use App\Http\Livewire\MateriaIndividual;
use App\Http\Livewire\RequestList;
use App\Http\Livewire\RequestListPage;


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

 Route::get('/',[Materialist::class,'render'])->name('home');
// Route::get('materia',[PageController::class,'subject'])->name('subject');
Route::get('materias/',[Subjectlist::class,'render'])->name('materias');//necesito llamar la fu
Route::get('materiaI/{subject:id}',[MateriaIndividual::class,'render'])->name('materiaI');//necesito llamar la funcion para que muestre
Route::get('solicitudes',[RequestListPage::class,'render'])->name('solicitudes');//necesito llamar la funcion para que muestre


// Route::get("/", "PageController@home")->name("home");
// Route::view('/','index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Route::get('subject', Subject::class);