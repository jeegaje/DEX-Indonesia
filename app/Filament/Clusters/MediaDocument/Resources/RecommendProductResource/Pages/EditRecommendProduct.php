<?php

namespace App\Filament\Clusters\MediaDocument\Resources\RecommendProductResource\Pages;

use App\Filament\Clusters\MediaDocument\Resources\RecommendProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRecommendProduct extends EditRecord
{
    protected static string $resource = RecommendProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
