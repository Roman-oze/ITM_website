<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;
    protected $fillable = [
    'image',
    'title',
    'type',
    'organization',
    'achievement_date',
    'description',
    'certificate',
    'featured',
    'status'
];
}


