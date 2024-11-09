<?php

namespace App\Livewire\CompanyProfile;

use Livewire\Component;

class Footer extends Component
{
    public $company_profile;
    
    public function render()
    {
        return view('livewire.company-profile.footer');
    }
}
