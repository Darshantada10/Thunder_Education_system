<?php

namespace App\Filament\Resources\NavbarResource\Pages;

use App\Filament\Resources\NavbarResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNavbar extends CreateRecord
{
    protected static string $resource = NavbarResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
