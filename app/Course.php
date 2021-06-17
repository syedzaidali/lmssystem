<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'users_id','categories_id','sub_categories_id','child_categories_id','name', 'photo','video','price','featured','status','hot','latest','description'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'categories_id','id');
    }
}
