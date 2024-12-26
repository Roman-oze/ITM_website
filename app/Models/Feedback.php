<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
        'email',
        'name',
        'is_read',
        'feedback_type', // Add feedback_type to fillable
    ];

    // If you have any hidden attributes, you can define them here
    protected $hidden = [];

    // Other model methods, relationships, etc.
}

