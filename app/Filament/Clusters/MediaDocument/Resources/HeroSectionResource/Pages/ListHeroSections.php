<?php

namespace App\Filament\Clusters\MediaDocument\Resources\HeroSectionResource\Pages;

use App\Filament\Clusters\MediaDocument\Resources\HeroSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHeroSections extends ListRecords
{
    protected static string $resource = HeroSectionResource::class;

    protected static ?string $title = 'Hero Section';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Upload Hero Section'),
        ];
    }
}
