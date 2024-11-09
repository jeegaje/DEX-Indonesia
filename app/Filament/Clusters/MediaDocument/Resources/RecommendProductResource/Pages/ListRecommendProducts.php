<?php

namespace App\Filament\Clusters\MediaDocument\Resources\RecommendProductResource\Pages;

use App\Filament\Clusters\MediaDocument\Resources\RecommendProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRecommendProducts extends ListRecords
{
    protected static string $resource = RecommendProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Upload Recommend Product'),
        ];
    }
}
