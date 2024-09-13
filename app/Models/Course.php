<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Schedule;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Course extends Model
{
    use HasFactory;

    protected $primaryKey = 'course_id';







public function schedules()
    {
        return $this->hasMany(Schedule::class, 'course_id');
    }


}
