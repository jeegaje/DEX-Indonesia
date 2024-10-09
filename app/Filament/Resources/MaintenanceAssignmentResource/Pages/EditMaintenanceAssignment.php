<?php

namespace App\Filament\Resources\MaintenanceAssignmentResource\Pages;

use App\Filament\Resources\MaintenanceAssignmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMaintenanceAssignment extends EditRecord
{
    protected static string $resource = MaintenanceAssignmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
