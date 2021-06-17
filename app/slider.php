<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $fillable = [
        'heading', 'sub_heading','photo','description'
    ];
}

