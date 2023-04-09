<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'phone' => '32165487',
            'address' => 'الكويت ,الفروانية جمعية الرحاب',
            'details' => 'متجر ملابس حريمي',
        ]);
        DB::table('companies')->insert([
            'name' => 'ناس بوتيك',
            'owner' => 'بتول محسن',
            'email' => 'nass@clothes.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'phone' => '32100087',
            'address' => 'الكويت , افينوس مول',
            'details' => 'متجر ملابس حريمي',
        ]);
        DB::table('companies')->insert([
            'name' => 'بربري ستور',
            'owner' => 'عدي  سامر',
            'email' => 'barbary@clothes.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'phone' => '23610008',
            'address' => 'منطقة الخيران',
            'details' => 'متجر ملابس رجالي',
        ]);
        DB::table('companies')->insert([
            'name' => 'ماكس اند كو',
            'owner' => 'طلال عابد',
            'email' => 'maxandcoo@clothes.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'phone' => '21615648',
            'address' => 'نطقة حولي',
            'details' => 'متجر ملابس رجالي',
        ]);
        DB::table('companies')->insert([
            'name' => 'اتش اند اس',
            'owner' => 'راشد تمام',
            'email' => 'hands@clothes.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'phone' => '35615558',
            'address' => 'منطقة جنوب السرة',
            'details' => 'متجر ملابس رجالي',
        ]);
        
    }
}
