<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            'name' => 'اوف وايت كويت',
            'owner' => 'آسيل ناصف',
            'email' => 'offwhite@clothes.com',
            'password' =>Hash::make('123456789'),
            'phone' => '32165487',
            'address' => 'الكويت ,الفروانية جمعية الرحاب',
            'details' => 'متجر ملابس حريمي',
        ]);
        DB::table('companies')->insert([
            'name' => 'ناس بوتيك',
            'owner' => 'بتول محسن',
            'email' => 'nass@clothes.com',
            'password' =>Hash::make('123456789'),
            'phone' => '32100087',
            'address' => 'الكويت , افينوس مول',
            'details' => 'متجر ملابس حريمي',
        ]);
        DB::table('companies')->insert([
            'name' => 'بربري ستور',
            'owner' => 'عدي  سامر',
            'email' => 'barbary@clothes.com',
            'password' =>Hash::make('123456789'),
            'phone' => '23610008',
            'address' => 'منطقة الخيران',
            'details' => 'متجر ملابس رجالي',
        ]);
        DB::table('companies')->insert([
            'name' => 'ماكس اند كو',
            'owner' => 'طلال عابد',
            'email' => 'maxandcoo@clothes.com',
            'password' =>Hash::make('123456789'),
            'phone' => '21615648',
            'address' => 'نطقة حولي',
            'details' => 'متجر ملابس رجالي',
        ]);
        DB::table('companies')->insert([
            'name' => 'اتش اند اس',
            'owner' => 'راشد تمام',
            'email' => 'hands@clothes.com',
            'password' =>Hash::make('123456789'),
            'phone' => '35615558',
            'address' => 'منطقة جنوب السرة',
            'details' => 'متجر ملابس رجالي',
        ]);
        
    }
}
