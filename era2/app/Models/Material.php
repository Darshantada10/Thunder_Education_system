<?php

namespace App\Models;

use App\Models\CourseDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Material extends Model
{
    use HasFactory;
    protected $fillable = ['course_details_id','topic','material'];

    public function course_details()
    {
        return $this->belongsTo(CourseDetail::class);
    }
}
