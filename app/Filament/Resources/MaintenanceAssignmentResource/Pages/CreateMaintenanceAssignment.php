<?php

namespace App\Filament\Resources\MaintenanceAssignmentResource\Pages;

use App\Filament\Resources\MaintenanceAssignmentResource;
use App\Models\MaintenanceAssignment;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Hash;

class CreateMaintenanceAssignment extends CreateRecord
{
    protected static string $resource = MaintenanceAssignmentResource::class;

    
    protected function handleRecordCreation(array $data): MaintenanceAssignment
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id']
        ]);

        $maintenanceAssignment = null;


        foreach ($data['pumps'] as $pump) {
            $maintenanceAssignment = MaintenanceAssignment::create([
                'user_id' => $user->id,
                'pump_id' => $pump['pump_id'],
                'maintenance_status' =>  $pump['maintenance_status']
            ]);
        }    

        return $maintenanceAssignment;
    }

}
