<?php

namespace App\Filament\Resources\NewDiscussionResource\Pages;

use App\Filament\Resources\NewDiscussionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewDiscussion extends EditRecord
{
    protected static string $resource = NewDiscussionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
