<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public function azzera(){
        $this->count = 0;
    }

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function setcounter ($number) {
        $this->count = $number;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
