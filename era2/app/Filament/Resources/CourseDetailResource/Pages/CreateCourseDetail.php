<?php

namespace App\Filament\Resources\CourseDetailResource\Pages;

use App\Filament\Resources\CourseDetailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCourseDetail extends CreateRecord
{
    protected static string $resource = CourseDetailResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
