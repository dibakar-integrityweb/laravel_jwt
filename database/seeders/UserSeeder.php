<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUser = User::create([
            'Name' => 'Super Admin',
            'username' => 'super-admin',
            'email' => 'super-admin@gmail.com',
            'role_id' => 1,
            'password' => bcrypt('123456'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(30)
        ]);

        $adminUser = User::create([
            'Name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'role_id' => 2,
            'password' => bcrypt('123456'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(30)
        ]);
    }
}
