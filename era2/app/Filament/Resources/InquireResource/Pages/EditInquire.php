<?php

namespace App\Filament\Resources\InquireResource\Pages;

use App\Filament\Resources\InquireResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInquire extends EditRecord
{
    protected static string $resource = InquireResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
