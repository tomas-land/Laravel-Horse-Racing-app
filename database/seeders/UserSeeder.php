<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
 use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('users')->insert([
        'name' => 'Mindaugas',
        'email' => 'mindaugas@gmail.com',
        'password' => Hash::make('mindaugas'),
        ]);
       
}
}
