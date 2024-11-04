<?php

namespace App\Models;
use App\models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;

    protected $primaryKey = 'batch_id';

    protected $fillable = ['batch_name'];

 
    public function students()
{
    return $this->hasMany(Student::class, 'batch_id'); // 'batch_id' is the foreign key in the students table
}



}
