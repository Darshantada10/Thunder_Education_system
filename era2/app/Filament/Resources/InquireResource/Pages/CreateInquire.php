<?php

namespace App\Filament\Resources\InquireResource\Pages;

use App\Filament\Resources\InquireResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInquire extends CreateRecord
{
    protected static string $resource = InquireResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
