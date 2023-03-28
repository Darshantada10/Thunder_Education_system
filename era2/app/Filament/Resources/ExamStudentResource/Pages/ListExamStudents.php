<?php

namespace App\Filament\Resources\ExamStudentResource\Pages;

use App\Filament\Resources\ExamStudentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamStudents extends ListRecords
{
    protected static string $resource = ExamStudentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
