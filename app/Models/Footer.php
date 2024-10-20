<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $table='footers';
    protected $primaryKey='id';

    protected $fillable = [
        'address', 'phone', 'email', 'tuition_fees', 'course_download', 'footer_logo', 'facebook', 'instagram', 'linkedin'
    ];
}

