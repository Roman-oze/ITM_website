<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    use HasFactory;
    protected $table = 'routines'; // Ensure this matches your database table name
    protected $fillable = ['title', 'file_path','image', 'type', 'uploaded_at'];

}
