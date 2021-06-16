<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseVido extends Model
{
    protected $fillable = [
        'course_id','video','name','lecture_no'
    ];
}
