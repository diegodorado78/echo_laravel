<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Subjectlist extends Component{
    public $subjects, $name, $image, $description, $subject_id;
    public $isOpen = 0;

    public function render()
    {
        return view('livewire.subjectlist');
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // public function render()
    // {
    //     $this->subject = Subject::all();
    //     return view('livewire.subject');
    // }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->name = '';
        $this->image = '';
        $this->description= '';
        $this->subject_id = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'image' => 'nullable',
            'description' => 'required',
        ]);

        Subjectlist::updateOrCreate(['id' => $this->id_subject], [
            'name' => $this->name,
            'subject_profile_photo_path' => $this->subject_profile_photo_path,
            'description' => $this->description
        ]);

        session()->flash('message',
            $this->student_id ? 'Subject Updated Successfully.' : 'Subject Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $subject = Subjectlist::findOrFail($id);
        $this->subject_id = $id;
        $this->name = $subject->name;
        $this->image = $subject->image;
        $this->description = $subject->description;

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Subjectlist::find($id)->delete();
        session()->flash('message', 'Subject Deleted Successfully.');
    }

}
