<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;
use App\Http\Controllers\PageController;
use App\Http\Livewire\Subject;

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
// Route::get('materia',[PageController::class,'subject'])->name('subject');


// Route::get("/", "PageController@home")->name("home");
// Route::view('/','index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Route::get('subject', Subject::class);