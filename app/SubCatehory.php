<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCatehory extends Model
{
    protected $fillable = [
        'categories_id','name', 'heading','description','status'
    ];
}
