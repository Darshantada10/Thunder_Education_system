<?php

namespace App\Filament\Resources\InquireResource\Pages;

use App\Filament\Resources\InquireResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInquires extends ListRecords
{
    protected static string $resource = InquireResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
