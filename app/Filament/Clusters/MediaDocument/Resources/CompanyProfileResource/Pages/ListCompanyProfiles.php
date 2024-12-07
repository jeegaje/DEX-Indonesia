<?php

namespace App\Filament\Clusters\MediaDocument\Resources\CompanyProfileResource\Pages;

use App\Filament\Clusters\MediaDocument\Resources\CompanyProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompanyProfiles extends ListRecords
{
    protected static string $resource = CompanyProfileResource::class;

    protected static ?string $title = 'Company Profile';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Upload Company Profile'),
        ];
    }
}
