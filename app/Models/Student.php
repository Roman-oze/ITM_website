<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $PrimaryKey=['id'];

    protected $table='students';

    protected $fillable = ['name','roll','email','batch_id','blood', 'address', 'mobile','type'];

    public function batch()
    {
        return $this->belongsTo(Batch::class, 'batch_id');
    }

}
