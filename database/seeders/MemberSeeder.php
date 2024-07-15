<?php

namespace Database\Seeders;
use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::create([
            'name' => 'John Doe',
            'roll' => '123',
            'batch' => '2021',
            'depart' => 'CSE',
            'email' => 'john@example.com',
        ]);
    }
}
