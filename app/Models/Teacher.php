<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Schedule;



class Teacher extends Model
{
    use HasFactory;

    protected $primaryKey = 'teacher_id';


    public function schedules(){
        return $this->hasMany(Schedule::class,'teacher_id','teacher_id');
    }
}
