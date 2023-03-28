<?php

namespace App\Filament\Resources\ExamStudentResource\Pages;

use App\Filament\Resources\ExamStudentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamStudent extends EditRecord
{
    protected static string $resource = ExamStudentResource::class;

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
