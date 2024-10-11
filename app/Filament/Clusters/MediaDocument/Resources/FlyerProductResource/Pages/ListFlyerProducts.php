<?php

namespace App\Filament\Clusters\MediaDocument\Resources\FlyerProductResource\Pages;

use App\Filament\Clusters\MediaDocument\Resources\FlyerProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFlyerProducts extends ListRecords
{
    protected static string $resource = FlyerProductResource::class;

    protected static ?string $title = 'Flyer Product';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
