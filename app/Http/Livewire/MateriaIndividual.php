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
//coment
// <?php

// namespace App\Http\Livewire;
// use Livewire\Component;
// use Livewire\WithFileUploads;
// use App\Models\Subject;

// class MateriasPopulares extends Component
// {
//     use WithFileUploads;

//     public $subject,$materias,$subject_id,$name,$image,$description;

//     public function render(){
//         $materias=Subject::all();
//         return view('livewire.materias-populares',compact('materias'));; //paso los datos atraves de subjects sin $

//     }

// }


