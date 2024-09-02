<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuPermission extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','menu_id'];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function menus(){
        return $this->belongsTo(Menu::class);
    }
}
