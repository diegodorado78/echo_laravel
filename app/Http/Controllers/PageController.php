<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Livewire\Subject;
class PageController extends Controller
{
     public function home() {
        return view('index');
    }
    //  public function subject() {
    //     return view('livewire.subject');
    // }

    // public function course() {
    //     return view('categories');
    // }
}
