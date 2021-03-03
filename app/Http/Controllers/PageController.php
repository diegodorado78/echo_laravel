<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Subjectlist;
use Illuminate\Http\Request;
use \Models\Subject;

class PageController extends Controller
{
     public function home() {
        return view('index');
    }
    // public function subject() {// paso la bd como param para usarlo
    //     return view('livewire.subjectlist');//metodo para  evitar pasar el array asociativo que declare arriba
    // }
      // public function subject(Subject $subject) {// paso la bd como param para usarlo
      //   return view('livewire.subjectlist', compact('subject'));//metodo para  evitar pasar el array asociativo que declare arriba
}

