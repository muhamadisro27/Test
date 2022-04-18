<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchStr extends Model
{
    use HasFactory;

    protected $fillable = [
        'match',
        'text',
        'total'
    ];
}
