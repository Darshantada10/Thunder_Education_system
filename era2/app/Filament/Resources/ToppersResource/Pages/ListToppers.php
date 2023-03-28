<?php

namespace App\Filament\Resources\ToppersResource\Pages;

use App\Filament\Resources\ToppersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListToppers extends ListRecords
{
    protected static string $resource = ToppersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
