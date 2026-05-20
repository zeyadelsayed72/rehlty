<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CitySeeder::class,
            CategorySeeder::class,
        ]);

        User::factory(10)->create();
        Ad::factory(50)->create();
    }
}
