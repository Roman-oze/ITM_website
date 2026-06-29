<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;
    protected $fillable = [

        'category',
        'organization_name',
        'logo',
        'website',
        'software_name',
        'service_type',
        'country',
        'description',
        'status'

    ];
    
}
