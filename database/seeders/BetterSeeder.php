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
            'surname' => 'Landa',
            'bet' => '100',
            'horse_id' => '1'
        ]);

        DB::table('betters')->insert([
            'name' => 'Linas',
            'surname' => 'Landa',
            'bet' => '300',
            'horse_id' => '2'
        ]);
        
        DB::table('betters')->insert([
            'name' => 'Marius',
            'surname' => 'Landa',
            'bet' => '200',
            'horse_id' => '3'
        ]);
    }
}
