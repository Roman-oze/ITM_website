<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $table = 'team_members';

    protected $primaryKey = 'teammember_id';

    protected $fillable = [
        'image',
        'name',
        'designation',
        'fb',
        'linked',
        'email',
        'phone',
    ];
}


