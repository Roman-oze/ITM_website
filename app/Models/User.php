<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable =
    ['name', 'email','email_verified_at','password','role','profile_picture'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function MenuPermissions(){
    return $this->hasMany(MenuPermission::class);
    }

    public function Schedule(){
        return $this->hasMany(Schedule::class,'user_id','user_id');

    }
    // public function hasRole($roles)
    // {
    //     // Assuming roles are stored as a string or relation in your database
    //     $userRole = $this->role; // Adjust based on your role setup

    //     if (is_array($roles)) {
    //         return in_array($userRole, $roles);
    //     }

    //     return $userRole === $roles;
    // }
}
