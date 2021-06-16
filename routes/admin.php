<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;

 Route::get('',[HomeController::class,'index'])->name('admin');
 Route::resource('users',UserController::class)->names('admin.users');
 Route::resource('users/edit',UserController::class)->names('admin.users.edit');
 Route::resource('users/delete',UserController::class)->names('admin.users.delete');
