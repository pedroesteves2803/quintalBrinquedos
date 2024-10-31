<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'phone',
        'email',
        'message',
        'subject_type',
        'active',
    ];

//[1 => 'orcamento', 2 => 'informacoes', 3 => 'comentario']

}
