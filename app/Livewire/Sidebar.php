<?php

namespace App\Livewire;

use Livewire\Component;

class Sidebar extends Component
{
    public $maintenance_type;
    
    public function render()
    {
        return view('livewire.sidebar');
    }
}
