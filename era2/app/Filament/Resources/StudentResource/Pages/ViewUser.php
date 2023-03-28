<?php

namespace App\Filament\Resources\StudentResource\Pages;

use App\Filament\Resources\StudentResource;
use App\Filament\Resources\StudentResource\Widgets\ResultChart;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewUser extends ViewRecord
{
    
    protected static string $resource = StudentResource::class;
    protected function getHeaderWidgetsColumns(): int | array
{
    return 1;
}
    protected function getHeaderWidgets(): array
{ 
    // return 1;
    return  [
        ResultChart::class,
        // return 1;
    ];
}
}
