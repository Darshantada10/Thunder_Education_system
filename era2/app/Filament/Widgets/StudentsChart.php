<?php

namespace App\Filament\Widgets;

use App\Models\ExamStudent;
use Carbon\Carbon;
use App\Models\Student;
use Filament\Widgets\BarChartWidget;

class StudentsChart extends BarChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {   
        $users=ExamStudent::select('created_at')->get()->groupBy(function($users)
        {
            return Carbon::parse($users->created_at)->format('F');
        });
        $quantities = [];
        foreach ($users as $user => $value) {
            array_push($quantities,$value->count());

        }
        return [
            'datasets' => [
                [
                    'label' => 'Students joined',
                    'data' => $quantities,
                    'backgroundColor'=>[
                        'rgba(255,99,132,0.2)',
                        'rgba(255,159,64,0.2)',
                    ],
                    'borderWidth'=>1
                ],
            ],
            'labels' => $users->keys(),
        ];
    }
}
