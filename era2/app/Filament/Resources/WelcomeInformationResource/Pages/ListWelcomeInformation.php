<?php

namespace App\Filament\Resources\WelcomeInformationResource\Pages;

use App\Filament\Resources\WelcomeInformationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWelcomeInformation extends ListRecords
{
    protected static string $resource = WelcomeInformationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
