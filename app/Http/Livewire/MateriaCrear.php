<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Subject;


class MateriaCrear extends Component{
    use WithFileUploads;
 public $subjects,$subject,$subject_id,$name,$image,$description,$filename;
     public $state='crear';

 public function crear(){
        $this->validate([
       'image' => 'image|max:1024',
  ]);
   $filename =  md5($this->image . microtime()).'.'.$this->image->extension();
    $this->image->storeAs('photos', $filename);

      return Subject::create([ // el modelo recibe un array con los campos a llenar del nuevo registro
          'name'=>$this->name,
          'description'=>$this->description,
          'image'=>$filename

      ]);
      $this->reset(['name','description','image']);//metodo para limpiar los campos una vez se haya creado el registro
    }
    public function render()
    {
        $subjects = Subject::all(); //metodo para irganizarlos por id del ultimo al 1
        return view('livewire.materia-crear',compact('subjects'));
    }
    public function edit(Subject $subject){//metodo que recibe objeto tipo Post
    $this->name = $subject->name;
    $this->description = $subject->description;
    $this->image = $subject->image;
    $this->subject_id = $subject->id;
    $this->state ="actualizar";//cambia el state a actualizar para que llame al update();

    }
    public function update(){
        $subject=Subject::find($this->subject_id);//metodo para recuperar registro por id
        //luego de recuperlo llamo al metodo update y paso los nuevos valores
        $subject->update([
            'name'=>$this->name, //tomo la prop name y le asigno lo que actualmente esta en name
            'description'=>$this->description,
            'image'=>$this->image,

        ]);
      $this->reset(['name','description','state','image','subject_id']);//metodo para limpiar los campos una vez se haya creado el registro

    }
    public function default(){
   $this->reset(['name','description','state','image','subject_id']);//de nuevo limpio los datos
    }

    public function destroy(Subject $subject){//paso como param el objeto par luego eliminarlo
      $subject->delete(); //elimino el registro que pase como param

    }
}
