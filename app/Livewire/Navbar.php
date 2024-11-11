<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $pumps;

    public $data_technician;

    public function render()
    {
        return view('livewire.navbar');
    }
}
