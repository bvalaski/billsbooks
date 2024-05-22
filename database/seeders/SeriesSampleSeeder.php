<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeriesSampleSeeder extends Seeder
{
    /**
     * Add records for series associated with sample books.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('series')->insert([
            ['id' => 4, 'series' => 'Anita Blake'],
            ['id' => 5, 'series' => 'Atevi'],
            ['id' => 7, 'series' => 'Dr Who - 11th (Smith)'],
            ['id' => 16, 'series' => 'Dr Who - 8th (McGann)'],
            ['id' => 19, 'series' => 'Jack Reacher'],
            ['id' => 20, 'series' => 'John Rain'],
            ['id' => 35, 'series' => 'Charley Davidson grim reaper'],
            ['id' => 36, 'series' => 'Charlie Parker'],
            ['id' => 37, 'series' => 'Murderbot Diaries'],
        ]);
        //
    }
}
