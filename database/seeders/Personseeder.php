<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Personseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('students')->insert([
        'name'=>str::random(10),
        'email'=>str::random(10).'@gmail.com',
        'department'=>str::random(10).'ITM',
        'address'=>str::random(10),
        'mobile'=> rand(1111111, 22222222),

       ]);
    }
}
