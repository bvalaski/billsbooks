<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsSampleSeeder extends Seeder
{
    /**
     * Authors matching the sample books data.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            ['id' => 5, 'lastname' => 'Asher', 'firstname' => 'Neal'],
            ['id' => 9, 'lastname' => 'Baxendale', 'firstname' => 'Trevor'],
            ['id' => 17, 'lastname' => 'Boucher', 'firstname' => 'Chris'],
            ['id' => 27, 'lastname' => 'Carey', 'firstname' => 'M. R.'],
            ['id' => 34, 'lastname' => 'Cherryh', 'firstname' => 'C. J.'],
            ['id' => 35, 'lastname' => 'Child', 'firstname' => 'Lee'],
            ['id' => 43, 'lastname' => 'Connelly', 'firstname' => 'Michael'],
            ['id' => 44, 'lastname' => 'Connolly', 'firstname' => 'John'],
            ['id' => 51, 'lastname' => 'Danker', 'firstname' => 'Sean'],
            ['id' => 67, 'lastname' => 'Eisler', 'firstname' => 'Barry'],
            ['id' => 90, 'lastname' => 'Hackwith', 'firstname' => 'A. J.'],
            ['id' => 92, 'lastname' => 'Hamilton', 'firstname' => 'Laurell'],
            ['id' => 172, 'lastname' => 'Paige', 'firstname' => 'Danielle'],
            ['id' => 210, 'lastname' => 'Stine', 'firstname' => 'Hank'],
            ['id' => 231, 'lastname' => 'Wells', 'firstname' => 'Martha'],
            ['id' => 256, 'lastname' => 'White', 'firstname' => 'Alex'],
            ['id' => 257, 'lastname' => 'Palmer', 'firstname' => 'Suzanne'],
            ['id' => 267, 'lastname' => 'Kiernan', 'firstname' => 'Caitlin R.'],
            ['id' => 292, 'lastname' => 'Bierbauer', 'firstname' => 'Alec'],
            ['id' => 298, 'lastname' => 'Jones', 'firstname' => 'Darynda'],
            ['id' => 301, 'lastname' => 'Hendrix', 'firstname' => 'Grady'],
            ['id' => 302, 'lastname' => 'Doiron', 'firstname' => 'Paul'],
            ['id' => 303, 'lastname' => 'Eriksson', 'firstname' => 'Kjell'],
            ['id' => 304, 'lastname' => 'McKinty', 'firstname' => 'Adrian'],
            ['id' => 305, 'lastname' => 'Donbavand', 'firstname' => 'Tommy'],
            ['id' => 307, 'lastname' => 'Johnson', 'firstname' => 'Deborah'],
            ['id' => 309, 'lastname' => 'Von Drehle', 'firstname' => 'David'],

        ]);
        //
    }
}
