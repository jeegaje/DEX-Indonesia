<?php

namespace App\Filament\Clusters\MediaDocument\Resources\HeroSectionResource\Pages;

use App\Filament\Clusters\MediaDocument\Resources\HeroSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHeroSection extends CreateRecord
{
    protected static string $resource = HeroSectionResource::class;
}
