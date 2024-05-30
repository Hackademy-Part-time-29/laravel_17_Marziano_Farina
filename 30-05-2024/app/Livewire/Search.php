<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Url;

class Search extends Component
{
    #[Url]
    public $q = "";

    public function render()
    {
        $users = User::where('name','LIKE' ,'%'.$this->q.'%')->get();
        return view('livewire.search',compact('users'));
    }
}
