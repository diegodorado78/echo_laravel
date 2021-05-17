<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Profile;
use App\Models\User;

class ShowProfile extends Component{
public $name,$phone,$birthday,$email;
    public function render()
    {
        $users =User::latest('id')->take(1)->get();

        return view('livewire.show-profile',compact('users'));
    }
}
