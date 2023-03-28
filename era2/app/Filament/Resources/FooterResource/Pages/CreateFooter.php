<?php

namespace App\Filament\Resources\FooterResource\Pages;

use App\Filament\Resources\FooterResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFooter extends CreateRecord
{
    protected static string $resource = FooterResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
