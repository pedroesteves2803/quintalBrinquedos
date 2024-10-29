<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'home';

    protected $fillable = [
        'title',
        'subtitle',
        'description_line_one',
        'description_line_two',
        'button',
        'image',
    ];
}
