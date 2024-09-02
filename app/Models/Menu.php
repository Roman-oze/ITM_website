<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'icon', 'nav_name', 'nav_link', 'parent_id',
    ];

    // If you have any relationships, define them here
    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    public function MenuPermission(){

        return $this->hasMany(MenuPermission::class);
    }


}
