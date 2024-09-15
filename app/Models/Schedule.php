<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\Teacher;

class Schedule extends Model
{
    use HasFactory;

    protected $primaryKey = 'schedule_id'; // Specify the correct primary key


    protected $fillable = [
        'schedule_id','room_no', 'day', 'start_time', 'end_time', 'course_id', 'teacher_id'
    ];

    // Define the relationship with the Course model
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    // Define the relationship with the Teacher model
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

}
