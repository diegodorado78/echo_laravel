<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subject;

class Materialist extends Component
{
    public $subject,$subjects,$subject_id,$name,$image,$description,$filename;
    public $state="crear";

    public function render(){
        $subjects =Subject::latest('id')->take(5)->get();
        return view('materialist',compact('subjects')); //paso los datos atraves de subjects sin $
    }
}
