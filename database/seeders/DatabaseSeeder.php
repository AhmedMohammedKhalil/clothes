<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            CompanySeeder::class,
            GenderSeeder::class,
            MaterialSeeder::class,
            SizeSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
        ]);
        //\App\Models\User::factory(10)->create();
    }
}
