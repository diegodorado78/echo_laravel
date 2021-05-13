<?php

namespace App\Http\Livewire;
use App\Models\Request;

use Livewire\Component;

class RequestList extends Component{
        public $subject_name,$fare,$payment_method,$site;

    public function render()
    {
        $requests =Request::latest('id')->take(8)->get();
        return view('livewire.request-list',compact('requests'));
    }
}
