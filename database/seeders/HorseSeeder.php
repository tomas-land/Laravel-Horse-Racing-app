<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HorseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('horses')->insert([
            'name' => 'Kronas',
            'runs' => '10',
            'wins' => '8',
            'about' => 'nice'
        ]);

        DB::table('horses')->insert([
            'name' => 'Priusas',
            'runs' => '10',
            'wins' => '8',
            'about' => 'weak'
        ]);
        DB::table('horses')->insert([
            'name' => 'Hermis',
            'runs' => '10',
            'wins' => '8',
            'about' => 'fast'
        ]);
    }
}
