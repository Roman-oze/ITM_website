<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        return User::create([
            'username'      => 'admin',
            'email'         => 'admin@example.com',
            'password'      => Hash::make('admin123'),
        ]);
    }
}
