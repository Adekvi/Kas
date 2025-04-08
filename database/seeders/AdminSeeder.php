<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('1'),
                'role' => 'admin',
                'no_wa' => '085866090206'
            ]
        );
    }
}
