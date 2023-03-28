<?php

namespace App\Filament\Resources\ToppersResource\Pages;

use App\Filament\Resources\ToppersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditToppers extends EditRecord
{
    protected static string $resource = ToppersResource::class;

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
