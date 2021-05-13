<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Request;
use Livewire\WithFileUploads;

class FormularioTutoria extends Component{
    public $subject_name,$fare;
    public $site="";
    public $payment_method="";

    public function crear(){
         return Request::create([ // el modelo recibe un array con los campos a llenar del nuevo registro
          'subject_name'=>$this->subject_name,
          'fare'=>$this->fare,
          'payment_method'=>$this->payment_method,
          'site'=>$this->site
        // 'image'=>$this->image->storeAs('photos',$this->name.'.jpg')
      ]);
    //  $this->reset(['subject_name','fare','payment_method','site']);//metodo para limpiar los campos una vez se haya creado el registro

    }
    public function render()
    {
                $requests = Request::latest('id')->get(); //metodo para irganizarlos por id del ultimo al 1
        return view('livewire.formulario-tutoria',compact('requests'));
    }
}
