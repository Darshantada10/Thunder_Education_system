<?php

namespace App\Filament\Resources\CourseDetailResource\Pages;

use App\Filament\Resources\CourseDetailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCourseDetail extends EditRecord
{
    protected static string $resource = CourseDetailResource::class;

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
