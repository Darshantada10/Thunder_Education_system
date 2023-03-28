<?php

namespace App\Models;

use App\Models\Exam;
use App\Models\Material;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseDetail extends Model
{
    use HasFactory;

    protected $fillable =['name','sub_name','heading','price','small_description','description','image','visible'=> 'boolean'];

    public function exam()
    {
        return $this->hasMany(Exam::class);
    }
    public function material()
    {
        return $this->hasMany(Material::class);
    }
}
