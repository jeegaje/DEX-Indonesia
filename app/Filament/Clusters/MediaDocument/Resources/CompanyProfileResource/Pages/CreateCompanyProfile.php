<?php

namespace App\Filament\Clusters\MediaDocument\Resources\CompanyProfileResource\Pages;

use App\Filament\Clusters\MediaDocument\Resources\CompanyProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCompanyProfile extends CreateRecord
{
    protected static string $resource = CompanyProfileResource::class;

    protected static ?string $title = 'Create Company Profile';
}
