<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Chart extends Component
{

    public $labels = [];
    public $values = [];


    public function render()
    {
        return view('livewire.chart');
    }
}
