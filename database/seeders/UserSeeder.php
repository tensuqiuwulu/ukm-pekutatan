<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Superadmin',
            'email' => 'tensu104qiuwulu98@gmail.com',
            'password' => Hash::make('superadmin'),
            'identity_number' => '5101031004980004',
            'role' => '["superadmin","admin"]',
            'is_superadmin' => true
        ]);
    }
}
