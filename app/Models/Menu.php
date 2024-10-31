<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;


    protected $fillable = ['icon', 'name', 'link', 'parent_id','order', ];


    public function permissions()
    {
        return $this->hasMany(MenuPermission::class);
    }


        // Relationship to get submenus (children) for a dropdown
        public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    // Relationship to access the parent menu
    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

}
