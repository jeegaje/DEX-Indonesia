<?php

namespace App\Filament\Clusters\MediaDocument\Resources\CompanyProfileResource\Pages;

use App\Filament\Clusters\MediaDocument\Resources\CompanyProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanyProfile extends EditRecord
{
    protected static string $resource = CompanyProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
