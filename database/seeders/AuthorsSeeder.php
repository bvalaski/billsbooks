<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
          ['id' => 256,'lastname' => "Palmer",'firstname' => "Suzanne"],
          ['id' => 239,'lastname' => "Wilson",'firstname' => "Daniel"],
          ['id' => 237,'lastname' => "Williams",'firstname' => "Tad"],
          ['id' => 234,'lastname' => "White",'firstname' => "Karen"],
          ['id' => 213,'lastname' => "Stross",'firstname' => "Charles"],
          ['id' => 209,'lastname' => "Stine",'firstname' => "Hank"],
          ['id' => 197,'lastname' => "Schlosser",'firstname' => "Eric"],
          ['id' => 196,'lastname' => "Schewe",'firstname' => "Phillip"],
          ['id' => 193,'lastname' => "Russell",'firstname' => "Gary"],
          ['id' => 187,'lastname' => "Reynolds",'firstname' => "Alastair"],
          ['id' => 178,'lastname' => "Perry",'firstname' => "Thomas"],
          ['id' => 175,'lastname' => "Patterson",'firstname' => "James"],
          ['id' => 173,'lastname' => "Parkin",'firstname' => "Lance"],
          ['id' => 172,'lastname' => "Paretsky",'firstname' => "Sarah"],
          ['id' => 153,'lastname' => "Miller",'firstname' => "John Jackson"],
          ['id' => 149,'lastname' => "Messingham",'firstname' => "Simon"],
          ['id' => 146,'lastname' => "McIntee",'firstname' => "David"],
          ['id' => 138,'lastname' => "Lyons",'firstname' => "Steve"],
          ['id' => 136,'lastname' => "Lucerno",'firstname' => "James"],
          ['id' => 123,'lastname' => "Larson",'firstname' => "Erik"],
          ['id' => 121,'lastname' => "Lagercrantz",'firstname' => "David"],
          ['id' => 118,'lastname' => "Kirkman",'firstname' => "Robert"],
          ['id' => 117,'lastname' => "King",'firstname' => "Stephen"],
          ['id' => 110,'lastname' => "Jong",'firstname' => "Erica"],
          ['id' => 107,'lastname' => "Hunter",'firstname' => "Stephen"],
          ['id' => 98,'lastname' => "Herbert",'firstname' => "Brian"],
          ['id' => 95,'lastname' => "Hayes",'firstname' => "Dade"],
          ['id' => 91,'lastname' => "Hamilton",'firstname' => "Laurell"],
          ['id' => 78,'lastname' => "Gibson",'firstname' => "William"],
          ['id' => 71,'lastname' => "Evanovitch",'firstname' => "Janet"],
          ['id' => 66,'lastname' => "Eisler",'firstname' => "Barry"],
          ['id' => 56,'lastname' => "Deaver",'firstname' => "Jeffrey"],
          ['id' => 55,'lastname' => "Day",'firstname' => "Martin"],
          ['id' => 46,'lastname' => "Cornell",'firstname' => "Paul"],
          ['id' => 43,'lastname' => "Connolly",'firstname' => "John"],
          ['id' => 42,'lastname' => "Connelly",'firstname' => "Michael"],
          ['id' => 35,'lastname' => "Chrichton",'firstname' => "Michael"],
          ['id' => 34,'lastname' => "Child",'firstname' => "Lee"],
          ['id' => 33,'lastname' => "Cherryh",'firstname' => "C. J."],
          ['id' => 23,'lastname' => "Bucher-Jones",'firstname' => "Simon"],
          ['id' => 19,'lastname' => "Brekke",'firstname' => "Jorgen"],
          ['id' => 8,'lastname' => "Baxendale",'firstname' => "Trevor"],
          ['id' => 5,'lastname' => "Baker",'firstname' => "Kage"],
          ['id' => 4,'lastname' => "Asher",'firstname' => "Neal"]
          
        ]);
        //
    }
}
