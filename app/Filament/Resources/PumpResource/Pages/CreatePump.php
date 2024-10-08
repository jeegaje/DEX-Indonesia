<?php

namespace App\Filament\Resources\PumpResource\Pages;

use App\Filament\Resources\PumpResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePump extends CreateRecord
{
    protected static string $resource = PumpResource::class;

    protected static ?string $title = 'Tambah Database Pompa';
}
