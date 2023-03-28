<?php

namespace App\Filament\Resources\ZoomResource\Pages;

use App\Filament\Resources\ZoomResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditZoom extends EditRecord
{
    protected static string $resource = ZoomResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
