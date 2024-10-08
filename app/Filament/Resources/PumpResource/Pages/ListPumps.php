<?php

namespace App\Filament\Resources\PumpResource\Pages;

use App\Filament\Resources\PumpResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPumps extends ListRecords
{
    protected static string $resource = PumpResource::class;

    protected static ?string $title = 'Database Pompa';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
