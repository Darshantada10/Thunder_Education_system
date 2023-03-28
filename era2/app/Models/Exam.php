<?php

namespace App\Models;

use App\Models\Question;
use App\Models\CourseDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = ['course_details_id','image','title', 'description'];
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    
    public function course_details()
    {
        return $this->belongsTo(CourseDetail::class);
    }

    // public function users()
    // {
    //     return $this->belongsToMany(Student::class, 'quiz_user')
    //         ->withPivot('score')
    //         ->withTimestamps();
    // }

}
