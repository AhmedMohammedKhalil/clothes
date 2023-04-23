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
            'image'=>'ac492df3389a81c3481f9f25f1f865d3c5877e5c.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'شورتات',
            'image'=>'ef6fe902358d74205ea7fa8e54c90a1d7cade223.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'بنطالونات',
            'image'=>'2402bdfe7310deec8a17adec34f90508c7c5a9d9.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'السترات',
            'image'=>'b5ad302779e7de0f290dc17750e404ce267a334b.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'المعاطف',
            'image'=>'6c9e0f6913eceaaae9e076d44a6a16088611ce41.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'البلوزات',
            'image'=>'c1c7c571501511ebdc7a89ffed728270fb704e2d.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'الفساتين',
            'image'=>'0d88d22a3a637c94f5703a3dbd7e4c34cabda9ac.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'جلاليب',
            'image'=>''
        ]);
        DB::table('categories')->insert([
            'name' => 'عبايات',
            'image'=>''
        ]);
        DB::table('categories')->insert([
            'name' => 'اسدال',
            'image'=>''
        ]);
        DB::table('categories')->insert([
            'name' => 'تيشيرت',
            'image'=>''
        ]);
        DB::table('categories')->insert([
            'name' => 'سويت شيرت',
            'image'=>''
        ]);
    }
}
