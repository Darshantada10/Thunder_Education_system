<?php

namespace App\Filament\Resources\WelcomeInformationResource\Pages;

use App\Filament\Resources\WelcomeInformationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWelcomeInformation extends EditRecord
{
    protected static string $resource = WelcomeInformationResource::class;

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
