<?php

namespace App\Filament\Clusters\MediaDocument\Resources\GaleryDexResource\Pages;

use App\Filament\Clusters\MediaDocument\Resources\GaleryDexResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGaleryDex extends EditRecord
{
    protected static string $resource = GaleryDexResource::class;

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
