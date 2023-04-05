<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Test Testman',
                'email' => 'test@test.com',
                'email_verified_at' => new DateTime(),
                'password' => Hash::make('password'),
                'remember_token' => null,
                'created_at' => new DateTime(),
                'updated_at' => null
            ],
            [
                'name' => 'Arwel Brown',
                'email' => 'arwel@test.com',
                'email_verified_at' => new DateTime(),
                'password' => Hash::make('password123'),
                'remember_token' => null,
                'created_at' => new DateTime(),
                'updated_at' => null
            ],
            [
                'name' => 'Jon Favreau',
                'email' => 'bigChefJF@test.com',
                'email_verified_at' => new DateTime(),
                'password' => Hash::make('youeverhadacubanobefore'),
                'remember_token' => null,
                'created_at' => new DateTime(),
                'updated_at' => null
            ]
        ]);
    }
}
