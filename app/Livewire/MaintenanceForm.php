<?php

namespace App\Livewire;

use App\Models\Maintenance;
use App\Models\MaintenanceAssignment;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Http\Request;

class MaintenanceForm extends Component
{
    public $field1 = 1; 


    public function render(Request $request)
    {
        $token = $request->query('token');

        $pump = MaintenanceAssignment::with(['pump', 'user'])->where('token', $token)->firstOrFail();

        $pumps = MaintenanceAssignment::with('pump')->where('user_id', $pump->user_id)->get();

        $totalOfInspection = Maintenance::where('maintenance_assignment_id', $pump->id)->count() + 1;

        $dataPump = $pump->pump;

        $dataTechnician = $pump->user;

        $meggerDate = Carbon::now()->format('d/m/Y');

        $angga = $this->field1;
        return view('livewire.maintenance-form', compact(
            'pump', 
            'pumps', 
            'totalOfInspection', 
            'dataPump', 
            'dataTechnician', 
            'meggerDate',
            'angga'
        ));
    }
}
