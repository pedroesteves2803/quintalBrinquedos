<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CredibilityStatements extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'title_advantage_one',
        'subtitle_advantage_one',
        'title_advantage_two',
        'subtitle_advantage_two',
        'title_advantage_three',
        'subtitle_advantage_three',
    ];

}
