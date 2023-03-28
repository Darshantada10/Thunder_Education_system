<?php

namespace App\Filament\Resources\LogoResource\Pages;

use App\Filament\Resources\LogoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLogo extends CreateRecord
{
    protected static string $resource = LogoResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
