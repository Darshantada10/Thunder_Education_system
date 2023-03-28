<?php

namespace App\Filament\Resources\ZoomResource\Pages;

use App\Filament\Resources\ZoomResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListZooms extends ListRecords
{
    protected static string $resource = ZoomResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
