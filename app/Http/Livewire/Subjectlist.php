<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Subject;
use Illuminate\Http\Request;

class Subjectlist extends Component{

    public $subject,$subjects,$subject_id,$name,$image,$description,$filename,$response;
    public $state="crear";

    public function render(){
        $subjects =Subject::latest('id')->take(9)->get();
        return view('livewire.subjectlist',compact('subjects')); //paso los datos atraves de subjects sin $
    }

};