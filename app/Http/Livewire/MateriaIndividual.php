<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use App\Models\Subject;
use Livewire\Component;



class MateriaIndividual extends Component{
        use WithFileUploads;

        public $subject,$subjects,$subject_id,$name,$image,$description;


//recibe el id para renderizar la pagina individual de la materia
    public function render(Subject $subject){
        return view('livewire.materia-individual',compact('subject'));
    }

}