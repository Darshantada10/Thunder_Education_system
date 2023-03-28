<?php

namespace App\Filament\Resources\CourseDetailResource\Pages;

use App\Filament\Resources\CourseDetailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCourseDetails extends ListRecords
{
    protected static string $resource = CourseDetailResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
