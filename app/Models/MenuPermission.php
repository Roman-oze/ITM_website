<?php

namespace App\Models;

use Spatie\Permission\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuPermission extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'role_id',
        'can_create',
        'can_edit',
        'can_update',
        'can_delete'
    ];




    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
