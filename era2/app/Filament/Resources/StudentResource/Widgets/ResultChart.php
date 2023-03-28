<?php

namespace App\Filament\Resources\StudentResource\Widgets;

// use App\Models\ExamStudent;

use App\Models\Exam;
use App\Models\ExamStudent;
use Carbon\Carbon;
use App\Models\Student;
use Filament\Widgets\BarChartWidget;

class ResultChart extends BarChartWidget
{
    protected static ?string $heading = 'Chart';
    protected static ?string $maxHeight = '300px';
    // protected static ?string $maxWidth = '300px';

    public ?Student $record = null;

     protected function getData(): array
    {   
        $users=ExamStudent::where('user_id','=',$this->record['user_id'])->get();
        $labels1=ExamStudent::where('user_id','=',$this->record['user_id'])->get('exam_id');
        
        $labels=Exam::where('id','=',$labels1[1]['exam_id'])->get('title');
        
        // $users=ExamStudent::where('user_id','=','5')->get();
        // $labels1=ExamStudent::where('user_id','=','5')->get('exam_id');
        // // dd($labels1[0]['exam_id']);
        // $labels=Exam::where('id','=',$labels1[2]['exam_id'])->get('title');
        // dd($labels[0]['title']);
        
        $quantities = [];
        $colms=[];
        foreach ($users as $user => $value) {
            array_push($quantities,$value->score);

        }
            foreach ($labels1 as $label => $value) {
        
                // array_push($colms,$value->title);
                array_push($colms,$value->exam_id);
                
            }
        
        return [
            	
            'datasets' => [
                [
                    'label' => 'Exam Score',
                    'data' => $quantities,
                    'backgroundColor'=>[
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                    ],
                    'borderColor'=> [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                      ],
                    'borderWidth'=>2,
                    'pointStyle'=>'circle'
                ],
            ],
            'labels' => $colms,
        ];
    }
}
