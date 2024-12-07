<?php

namespace App\Filament\Resources\MaintenanceAssignmentResource\Pages;

use App\Filament\Resources\MaintenanceAssignmentResource;
use App\Models\MaintenanceAssignment;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateMaintenanceAssignment extends CreateRecord
{
    protected static string $resource = MaintenanceAssignmentResource::class;

    
    protected function handleRecordCreation(array $data): MaintenanceAssignment
    {
        foreach ($data['pumps'] as $pump) {
            $maintenanceAssignment = MaintenanceAssignment::create([
                'user_id' => $data['user_id'],
                'pump_id' => $pump['pump_id'],
                'maintenance_type' =>  $pump['maintenance_type'],
                'status' => 'active',
                'token' =>  Str::random(32)
            ]);
        }    

        return $maintenanceAssignment;
    }

}
