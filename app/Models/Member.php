<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'roll', 'batch', 'depart', 'email',
    ];

    public function group(){

        return $this->hasMany(Group::class);
    }
}
