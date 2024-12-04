<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    use HasFactory;
    protected $primaryKey =  'routines';
    protected $fillable = ['title', 'file_path','image', 'type', 'uploaded_at'];

}
