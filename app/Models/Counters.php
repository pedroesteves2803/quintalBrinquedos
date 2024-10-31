<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counters extends Model
{
    use HasFactory;

    protected $fillable = [
        'counter_one',
        'counter_one_text',
        'counter_two',
        'counter_two_text',
        'counter_three',
        'counter_three_text',
    ];

}
