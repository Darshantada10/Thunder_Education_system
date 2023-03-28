<?php

namespace App\Models;

use App\Models\Exam;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['exam_id', 'question', 'choice1', 'choice2','choice3','choice4','answer',];

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
}
