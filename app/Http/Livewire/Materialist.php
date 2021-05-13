<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class Materialist extends Component
{
    public $subject,$subjects,$subject_id,$name,$image,$description,$filename;
    public $state="crear";

    public function render(){
        // $usuarios=HTTP::get('http://localhost:3000/users');
        // $usuariosA=$usuarios->json();
        $subjects =Subject::latest('id')->take(5)->get();
        return view('materialist',compact('subjects')); // ,'usuariosA'paso los datos atraves de subjects sin $
    }
}
