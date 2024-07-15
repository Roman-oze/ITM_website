<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $primaryKey ='groups';

    protected $fillable = [
        'member_id', 'blood', 'mobile', 'address', 'status',
    ];


    public function member(){
        return $this->belongsTo(Member::class);
    }
}
