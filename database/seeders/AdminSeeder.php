<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'full_name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('123456789'),
            'level' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
