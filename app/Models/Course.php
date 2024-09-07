<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_name',
        'course_code',
        'credit',
    ];

    
    protected $primaryKey = 'course_Id';


// public function schedules(){

//     return $this->hasMany(Schedule::class,'course_id','course_id');
// }
}
