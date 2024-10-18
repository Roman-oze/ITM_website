<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herosection extends Model
{
    use HasFactory;
    protected $primaryKey ='herosections';

    protected $fillable = [
        'id', 'title', 'description', 'link', 'image',
    ];


}
