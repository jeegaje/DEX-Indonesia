<?php

namespace App\Filament\Resources\MaintenanceAssignmentResource\Pages;

use App\Filament\Resources\MaintenanceAssignmentResource;
use App\Models\MaintenanceAssignment;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditMaintenanceAssignment extends EditRecord
{
    protected static string $resource = MaintenanceAssignmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $record->update([
            'pump_id' => $data['pump_id'],
            'maintenance_type' => $data['maintenance_type'],
            'user_id' => $data['user_id']
        ]);

        return $record;
    }
    
}
