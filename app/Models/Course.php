<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Schedule;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Course extends Model
{
    use HasFactory;

    protected $primaryKey = 'course_id';
    
    protected $fillable = ['course_name', 'course_code', 'credit', 'semester_id']; // Add semester_id here








public function schedules()
    {
        return $this->hasMany(Schedule::class, 'course_id');
    }


}
