<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelcomeInformation extends Model
{
    use HasFactory;
    protected $fillable = ['slogan','heading','sub_heading','image','extra_information','visible'=> 'boolean'];

}
