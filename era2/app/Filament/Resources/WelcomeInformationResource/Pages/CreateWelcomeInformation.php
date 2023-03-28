<?php

namespace App\Filament\Resources\WelcomeInformationResource\Pages;

use App\Filament\Resources\WelcomeInformationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWelcomeInformation extends CreateRecord
{
    protected static string $resource = WelcomeInformationResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
