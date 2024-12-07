<?php

namespace App\Filament\Clusters\MediaDocument\Resources\RecommendProductResource\Pages;

use App\Filament\Clusters\MediaDocument\Resources\RecommendProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRecommendProduct extends EditRecord
{
    protected static string $resource = RecommendProductResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // Tambahkan key `is_video` berdasarkan media_type
        $data['is_video'] = $data['media_type'] === 'video';
        return $data;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
