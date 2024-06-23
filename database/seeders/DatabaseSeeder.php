<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'name' => 'sani',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        // Insert all divisions into the 'cities' table
        DB::table('cities')->insert([
            ['name' => 'Barisal'],
            ['name' => 'Chittagong'],
            ['name' => 'Dhaka'],
            ['name' => 'Khulna'],
            ['name' => 'Mymensingh'],
            ['name' => 'Rajshahi'],
            ['name' => 'Rangpur'],
            ['name' => 'Sylhet'],
        ]);
    }
}
