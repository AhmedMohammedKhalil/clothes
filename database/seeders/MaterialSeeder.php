<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('materials')->insert([
            'name' => 'قطن',
        ]);
        DB::table('materials')->insert([
            'name' => 'صوف',
        ]);
        DB::table('materials')->insert([
            'name' => 'الكتان',
        ]);
        DB::table('materials')->insert([
            'name' => 'حرير',
        ]);
        DB::table('materials')->insert([
            'name' => 'الشيفون',
        ]);
        DB::table('materials')->insert([
            'name' => 'الأورجانزا',
        ]);
    }
}
