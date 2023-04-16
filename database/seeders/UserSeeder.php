<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'طلال ظاهر',
            'email' => 'talal@gmail.com',
            'password' => Hash::make('123456789'), // password
            'phone' => '12345678',
        ]);

        DB::table('users')->insert([
            'name' => 'كساب  كرم',
            'email' => 'kassab@gmail.com',
            'password' => Hash::make('123456789'), // password
            'phone' => '12345678',
        ]);

        DB::table('users')->insert([
            'name' => 'رشيد  بشار',
            'email' => 'rasheed@gmail.com',
            'password' => Hash::make('123456789'), // password
            'phone' => '12345678',
        ]);
        DB::table('users')->insert([
            'name' => 'فراس  كريم',
            'email' => 'feraas@gmail.com',
            'password' => Hash::make('123456789'), // password
            'phone' => '12345678',
        ]);
        DB::table('users')->insert([
            'name' => 'خاطر  معوض',
            'email' => 'khater@gmail.com',
            'password' => Hash::make('123456789'), // password
            'phone' => '12345678',
        ]);
    }
}
