<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    use HasFactory;
    protected $table='routines';
    protected $primaryKey='id';

    protected $fillable = ['file','type'];



}
