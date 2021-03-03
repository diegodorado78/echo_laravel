<?php

namespace App\Http\Livewire;

use App\Models\Category;


use Livewire\Component;
use Livewire\WithFileUploads;

class Categories extends Component
{
    use WithFileUploads;
 public $categories,$category,$name, $category_id;
     public $state='crear';

 public function crear(){

      Category::create([ // el modelo recibe un array con los campos a llenar del nuevo registro
          'name'=>$this->name,

      ]);
      $this->reset(['name']);//metodo para limpiar los campos una vez se haya creado el registro
    }

    public function render(){
        $categories = Category::all(); //metodo para irganizarlos por id del ultimo al 1
        return view('livewire.categories',compact('categories'));
    }

    public function edit(Category $category){//metodo que recibe objeto tipo Post
    $this->name = $category->name;
    $this->category_id = $category->id;
    $this->state ="actualizar";//cambia el state a actualizar para que llame al update();

    }
    public function update(){
        $category=Category::find($this->category_id);//metodo para recuperar registro por id
        //luego de recuperlo llamo al metodo update y paso los nuevos valores
        $category->update([
            'name'=>$this->name, //tomo la prop name y le asigno lo que actualmente esta en name
        ]);
      $this->reset(['name','category_id']);//metodo para limpiar los campos una vez se haya creado el registro

    }
    public function default(){
   $this->reset(['name','category_id']);//de nuevo limpio los datos
    }

    public function destroy(Category $category){//paso como param el objeto par luego eliminarlo
      $category->delete(); //elimino el registro que pase como param

    }
}
