<?php

namespace Database\Seeders;
use App\Models\Group;
use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $member = Member::first();

        Group::create([
            'member_id' => $member->id,
            'blood' => 'O+',
            'mobile' => '1234567890',
            'address' => '123 Main St',
            'status' => 'Active',
        ]);
    }
}
