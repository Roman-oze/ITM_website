<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return User::create([
            'username'      => 'admin',
            'email'         => 'admin@example.com',
            'role_id'       => 1,
            'business_level_id' => 1,
            'password'      => Hash::make('admin123'),
        ]);
    }
}
