<?php

namespace App\Filament\Resources\ExamStudentResource\Pages;

use App\Filament\Resources\ExamStudentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateExamStudent extends CreateRecord
{
    protected static string $resource = ExamStudentResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
