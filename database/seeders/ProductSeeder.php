<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'بلوزة قطن',
            'available' => '1',
            'price' => '349',
            'offer' => '300',
            'details' => ' بلوزة من القطن بأكمام طويلة',
            'category_id' => '6',
            'gender_id' => '2',
            'company_id' => '1',
            'material_id' => '1',
        ]);

        DB::table('products')->insert([
            'name' => 'فستان دينغري  ',
            'available' => '1',
            'price' => '950',
            'offer' => '870',
            'details' => 'فستان دينغري من الكوردوري',
            'category_id' => '7',
            'gender_id' => '2',
            'company_id' => '1',
            'material_id' => '6',
        ]);

        DB::table('products')->insert([
            'name' => 'قميص أوكسفورد بقصة عادية',
            'available' => '1',
            'price' => '250',
            'offer' => '220',
            'details' => 'قميص أوكسفورد بقصة عادية',
            'category_id' => '1',
            'gender_id' => '1',
            'company_id' => '2',
            'material_id' => '2',
        ]);
        DB::table('products')->insert([
            'name' => 'بنطلون كارجو  ',
            'available' => '1',
            'price' => '333',
            'offer' => '320',
            'details' => 'بنطلون كارجو بقصة مريحة',
            'category_id' => '3',
            'gender_id' => '1',
            'company_id' => '2',
            'material_id' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'بنطلون رياضي',
            'available' => '1',
            'price' => '333',
            'offer' => '320',
            'details' => 'بنطلون بقصة مريحة',
            'category_id' => '3',
            'gender_id' => '1',
            'company_id' => '3',
            'material_id' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'سويت شيرت ',
            'available' => '1',
            'price' => '200',
            'offer' => '170',
            'details' => 'سويت شيرت مرنة بقصّة عادية',
            'category_id' => '4',
            'gender_id' => '1',
            'company_id' => '3',
            'material_id' => '5',
        ]);
        DB::table('products')->insert([
            'name' => 'شورت',
            'available' => '1',
            'price' => '300',
            'offer' => '260',
            'details' => 'شورت رياضي للركض',
            'category_id' => '2',
            'gender_id' => '1',
            'company_id' => '4',
            'material_id' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'هودي رياضي',
            'available' => '1',
            'price' => '600',
            'offer' => '500',
            'details' => 'هودي رياضي منسوج من قماش دراي موف',
            'category_id' => '4',
            'gender_id' => '1',
            'company_id' => '4',
            'material_id' => '6',
        ]);
        DB::table('products')->insert([
            'name' => 'تيشيرت',
            'available' => '1',
            'price' => '120',
            'offer' => '110',
            'details' => 'تي-شيرت بقصّة عادية مع جيب',
            'category_id' => '6',
            'gender_id' => '1',
            'company_id' => '5',
            'material_id' => '3',
        ]);
        DB::table('products')->insert([
            'name' => 'تيشيرت ملون',
            'available' => '1',
            'price' => '620',
            'offer' => '580',
            'details' => 'تي-شيرت مزين بطبعة وبقصة مريحة',
            'category_id' => '6',
            'gender_id' => '1',
            'company_id' => '5',
            'material_id' => '3',
        ]);
    }
}
