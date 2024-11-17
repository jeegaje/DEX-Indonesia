<?php

namespace App\Filament\Clusters\MediaDocument\Resources\GaleryDexResource\Pages;

use App\Filament\Clusters\MediaDocument\Resources\GaleryDexResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGaleryDexes extends ListRecords
{
    protected static string $resource = GaleryDexResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Upload Galery DEX'),
        ];
    }
}
