<?php

namespace App\Filament\Clusters\MediaDocument\Resources\GaleryDexResource\Pages;

use App\Filament\Clusters\MediaDocument\Resources\GaleryDexResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGaleryDex extends EditRecord
{
    protected static string $resource = GaleryDexResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
