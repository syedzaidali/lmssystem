<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChildCatehory extends Model
{
    protected $fillable = [
        'categories_id','sub_categories_id','name', 'heading','description','status'
    ];
}
