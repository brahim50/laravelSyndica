<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenu extends Model
{
    use HasFactory;
    protected $fillable = [
        'lmmeuble',
        'appartement',
        'somme',
        'date',
    ];
}