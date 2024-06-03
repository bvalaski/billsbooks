<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OwnedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('owned')->insert([
            ['id' => 1, 'owned_status' => 'No'],
            ['id' => 2, 'owned_status' => 'Paperback'],
            ['id' => 3, 'owned_status' => 'Need To Buy'],
            ['id' => 4, 'owned_status' => 'Kindle'],
            ['id' => 5, 'owned_status' => 'Hardback'],
        ]);
        //
    }
}
