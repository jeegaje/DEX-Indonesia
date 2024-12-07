<?php

namespace App\Filament\Clusters\MediaDocument\Resources\FlyerProductResource\Pages;

use App\Filament\Clusters\MediaDocument\Resources\FlyerProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFlyerProduct extends EditRecord
{
    protected static string $resource = FlyerProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
