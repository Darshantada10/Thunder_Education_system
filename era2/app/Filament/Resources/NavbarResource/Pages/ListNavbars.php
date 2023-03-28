<?php

namespace App\Filament\Resources\NavbarResource\Pages;

use App\Filament\Resources\NavbarResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNavbars extends ListRecords
{
    protected static string $resource = NavbarResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
