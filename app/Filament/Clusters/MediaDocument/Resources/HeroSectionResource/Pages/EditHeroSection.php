<?php

namespace App\Filament\Clusters\MediaDocument\Resources\HeroSectionResource\Pages;

use App\Filament\Clusters\MediaDocument\Resources\HeroSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHeroSection extends EditRecord
{
    protected static string $resource = HeroSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
