<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubPhoto extends Model
{
    use HasFactory;
    protected $table = 'club_photo';
    protected $fillable = [
        'image',
        'title',
    ];
}
