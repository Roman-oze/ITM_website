<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // return User::create([
        //     'name'      => 'admin',
        //     'email'         => 'admin@itm.com',
        //     'password'      => Hash::make('admin211'),
        // ]);
    }


}
