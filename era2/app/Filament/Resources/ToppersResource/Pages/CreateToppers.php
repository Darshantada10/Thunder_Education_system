<?php

namespace App\Filament\Resources\ToppersResource\Pages;

use App\Filament\Resources\ToppersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateToppers extends CreateRecord
{
    protected static string $resource = ToppersResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
