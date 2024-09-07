<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['day','course_id','teacher_id'];

    public function courses(){
     return $this->belongsTo(Course::class,'course_id','course_id');

    }
    public function teachers(){
     return $this->belongsTo(Teacher::class,'teacher_id','teacher_id');
    }
    }
