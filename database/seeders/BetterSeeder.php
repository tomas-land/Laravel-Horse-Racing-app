<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('betters')->insert([
            'name' => 'Mindaugas',
            'surname' => 'Minda',
            'bet' => '100',
            'horse_id' => '1'
        ]);

        DB::table('betters')->insert([
            'name' => 'Linas',
            'surname' => 'Linaitis',
            'bet' => '300',
            'horse_id' => '2'
        ]);
        
        DB::table('betters')->insert([
            'name' => 'Marius',
            'surname' => 'Mariukas',
            'bet' => '200',
            'horse_id' => '3'
        ]);
    }
}
