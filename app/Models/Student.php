<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table=['students'];
    protected $PrimaryKey=['id'];

protected $fillable = ['name','roll','batch','email','blood', 'address', 'mobile','type'];

}
