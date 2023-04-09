<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'قمصان',
        ]);
        DB::table('categories')->insert([
            'name' => 'شورتات',
        ]);
        DB::table('categories')->insert([
            'name' => 'بنطالونات',
        ]);
        DB::table('categories')->insert([
            'name' => ' السترات ',
        ]);
        DB::table('categories')->insert([
            'name' => 'المعاطف',
        ]);
        DB::table('categories')->insert([
            'name' => 'البلوزات',
        ]);
        DB::table('categories')->insert([
            'name' => 'الفساتين',
        ]);
    }
}
