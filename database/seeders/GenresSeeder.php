<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
          ['id' => 1, 'genre' => "Mystery"],
          ['id' => 2, 'genre' => "Fiction"],
          ['id' => 3, 'genre' => "SciFi"],
          ['id' => 4, 'genre' => "Historical"],
          ['id' => 5, 'genre' => "Reference"],
          ['id' => 6, 'genre' => "Biography"]
        ]);
        //
    }
}
