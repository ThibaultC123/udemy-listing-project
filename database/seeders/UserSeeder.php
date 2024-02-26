<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Super Admin',
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$dm/b97skmFQJ4ea/njyB.e.1tTiv8LSMvcKMipldmHHXAHiE0/NGG',
                'user_type' => 'admin',
            ],
            [
                'name' => 'John Doe',
                'email' => 'user@gmail.com',
                'password' => '$2y$10$dm/b97skmFQJ4ea/njyB.e.1tTiv8LSMvcKMipldmHHXAHiE0/NGG',
                'user_type' => 'user',
            ],
        ]);
    }
}
