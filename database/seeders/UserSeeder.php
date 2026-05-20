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
        User::create([
            'username'=> 'admin',
            'name'=> 'Admin User',
            'email'=> 'admin@rehlty.com',
            'password'=> 'password123',
            'phone'=> '0123456789',
        ]);

        User::create([
            'username'=> 'ziad',
            'name'=> 'زياد',
            'email'=> 'ziad@rehlty.com',
            'password'=> 'password123',
            'phone'=> '0109876543',
        ]);
    }
}
