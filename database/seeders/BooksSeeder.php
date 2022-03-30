<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
          ['title' => "Protector",'author_id' => 33, 'genre_id' => 3,'date_read' => "2013-08-01",'comments' => "Book 14"],
          ['title' => "Nothing to Lose",'author_id' => 34, 'genre_id' => 2,'date_read' => "2015-09-08",'comments' => "Depleted uranium recycling by military contractor in Despair, CO"],
          ['title' => "Spiral Scratch",'author_id' => 193, 'genre_id' => 3,'date_read' => "2010-05-02",'comments' => "Chaotic story in the beginning, but gets much better.  Events take place before *Trial of a Time Lord*."],
          ['title' => "Devil in the White City",'author_id' => 123, 'genre_id' => 4,'date_read' => "2003-10-25",'comments' => "Serial murder investigation around the Chicago World's Fair"],
          ['title' => "Dead Ice",'author_id' => 91, 'genre_id' => 3,'date_read' => "2018-01-11",'comments' => "Anite is bringing back zombies that are too life-like, and a voodoo priest is making zombie porn."],
          ['title' => "Pattern Recognition",'author_id' => 78, 'genre_id' => 3,'date_read' => "2003-08-03",'comments' => ""],
          ['title' => "Rise of the Govrnor",'author_id' => 118, 'genre_id' => 2,'date_read' => "2015-04-26",'comments' => ""],
          ['title' => "Fire Sale",'author_id' => 172, 'genre_id' => 1,'date_read' => "2006-03-15",'comments' => ""],
          ['title' => "Sandworms  of Dune",'author_id' => 98, 'genre_id' => 3,'date_read' => "2008-03-18",'comments' => ""],
          ['title' => "Father Time ",'author_id' => 173, 'genre_id' => 3,'date_read' => "2012-07-22",'comments' => "Book 41 - The Doctoris still on earth in the 1980s and finds a girl who also may be Gallifreyan."],
          ['title' => "Pop goes the weasel",'author_id' => 175, 'genre_id' => 2,'date_read' => "2004-11-01",'comments' => ""],
          ['title' => "House on Tradd Street ",'author_id' => 234, 'genre_id' => 2,'date_read' => "1970-01-01",'comments' => ""],
          ['title' => "Crooked World",'author_id' => 138, 'genre_id' => 3,'date_read' => "2004-01-02",'comments' => "Book 57"],
          ['title' => "One Shot",'author_id' => 34, 'genre_id' => 2,'date_read' => "1970-01-01",'comments' => ""],
          ['title' => "Infinity Race",'author_id' => 149, 'genre_id' => 3,'date_read' => "2004-01-02",'comments' => "Book 61"],
          ['title' => "Prisoner: A Day In The Life",'author_id' => 209, 'genre_id' => 3,'date_read' => "2006-08-25",'comments' => ""],
          ['title' => "Carte Blanche (007)",'author_id' => 56, 'genre_id' => 2,'date_read' => "2011-11-10",'comments' => "7"],
          ['title' => "Soft Target",'author_id' => 107, 'genre_id' => 2,'date_read' => "2012-10-03",'comments' => "A terrorist attack at the Mall of America, set in the Bob Swagger universe."],
          ['title' => "Silence",'author_id' => 178, 'genre_id' => 1,'date_read' => "2009-12-13",'comments' => "A woman almost beaten and killed 6 years ago is forced out of hiding.  The assassins looking for her are a dysfunctional married couple."],
          ['title' => "Where Monsters Dwell",'author_id' => 19, 'genre_id' => 1,'date_read' => "1970-01-01",'comments' => ""],
          ['title' => "Alliance Space:  Merchanter's Luck",'author_id' => 33, 'genre_id' => 3,'date_read' => "2019-04-09",'comments' => "Hard sci-fi novel about a merchant tug staying relevant amongst corporate shipping groups."],
          ['title' => "Reapers ",'author_id' => 43, 'genre_id' => 1,'date_read' => "1970-01-01",'comments' => ""],
          ['title' => "Warship",'author_id' => 4, 'genre_id' => 3,'date_read' => "2019-12-12",'comments' => "A new Jain threat emerges from the black hole where it had been imprisoned and the Earth Central AI mus join with the Prador to combat"],
          ['title' => "Waste Lands",'author_id' => 117, 'genre_id' => 3,'date_read' => "2017-04-25",'comments' => "The traveler's follow the Path to the Citadel and meet up with Blaine the Mono."],
          ['title' => "Ten Big Ones",'author_id' => 71, 'genre_id' => 1,'date_read' => "2004-10-14",'comments' => ""],
          ['title' => "Gil in the Spider's Web",'author_id' => 121, 'genre_id' => 2,'date_read' => "2017-06-19",'comments' => "Elisabeth runs across here sister while hacking in to the NSA to unravel her father's criminal enterprise."],
          ['title' => "Grid",'author_id' => 196, 'genre_id' => 5,'date_read' => "1970-01-01",'comments' => ""],
          ['title' => "Fear of the Dark",'author_id' => 8, 'genre_id' => 3,'date_read' => "2004-01-02",'comments' => ""],
          ['title' => "Grimm Reality ",'author_id' => 23, 'genre_id' => 3,'date_read' => "2004-01-02",'comments' => "Book 50"],
          ['title' => "Clockwork Dynasty",'author_id' => 239, 'genre_id' => 3,'date_read' => "2018-05-03",'comments' => "Mechanical automata have been hiding amongst mankind for centuries, looking for their creators."],
          ['title' => "The Shadows of Avalon",'author_id' => 46, 'genre_id' => 3,'date_read' => "2006-08-15",'comments' => "Book 31"],
          ['title' => "Fast Food Nation",'author_id' => 197, 'genre_id' => 4,'date_read' => "1970-01-01",'comments' => ""],
          ['title' => "Garden of Iden",'author_id' => 5, 'genre_id' => 3,'date_read' => "2014-02-15",'comments' => "Agents that are immortal take the long road through time to effect change or build fortunes.  Story was too tounge in cheek and did not have much direction"],
          ['title' => "Open Wide:  The anxious early hours of a Hollywood blockbust",'author_id' => 95, 'genre_id' => 4,'date_read' => "2008-11-25",'comments' => "Too many small stories about the players to show how the movie release process has changed."],
          ['title' => "City of Golden Shadows",'author_id' => 237, 'genre_id' => 3,'date_read' => "2003-11-17",'comments' => "Otherland book 1/4"],
          ['title' => "Mission: Impractical",'author_id' => 146, 'genre_id' => 3,'date_read' => "2004-01-02",'comments' => ""],
          ['title' => "Revelation Space",'author_id' => 187, 'genre_id' => 3,'date_read' => "2004-08-26",'comments' => ""],
          ['title' => "Hard time",'author_id' => 172, 'genre_id' => 1,'date_read' => "2003-09-01",'comments' => ""],
          ['title' => "Unifying Force",'author_id' => 136, 'genre_id' => 3,'date_read' => "2004-10-03",'comments' => "Book 19"],
          ['title' => "Sleep of Reason",'author_id' => 55,'genre_id' => 3,'date_read' => "2004-01-02",'comments' => "Book 70"],
          ['title' => "Doctor Sleep",'author_id' => 117, 'genre_id' => 3,'date_read' => "2020-01-18",'comments' => "Dan, the chld from The Shining, gets involved with a young girl with the skills as she is getting hunted for evil gypsies"],
          ['title' => "Dying in the Sun",'author_id' => 153, 'genre_id' => 3,'date_read' => "2004-01-02",'comments' => ""],
          ['title' => "Detachment",'author_id' => 66, 'genre_id' => 2,'date_read' => "2012-09-09",'comments' => "John joins Dox and two other specialists to dismantle a terrorist plot on American soil."],
          ['title' => "Angels Flight",'author_id' => 42, 'genre_id' => 3,'date_read' => "2017-12-23",'comments' => "Harry investiagates a civil rights lawyer that may have been killed by the cops."],
          ['title' => "Gone Tomorrow",'author_id' => 34, 'genre_id' => 2,'date_read' => "2016-02-19",'comments' => "Jack is tracking down an Al Qaeda terror cell in New York"],
          ['title' => "Halting State",'author_id' => 213, 'genre_id' => 6,'date_read' => "2008-07-28",'comments' => ""],
          ['title' => "Andromeda Evolution",'author_id' => 35, 'genre_id' => 3,'date_read' => "2019-12-16",'comments' => "Chinese and Amrican researchers look for the remains of a space lab that fell into the Amazon forest."],
          ['title' => "Fear of Flying",'author_id' => 110, 'genre_id' => 2,'date_read' => "2015-02-26",'comments' => "Crazy  jewish girl with so many conflicting influences trying to find peace with her inner sexuality.  Too tiresome to finish."],
          ['title' => "Finder",'author_id' => 256, 'genre_id' => 3,'date_read' => "2020-06-01",'comments' => "Finder Chronicles #1 Fergus Ferguson looks to retrieve a stolen spaceship and gets involved in a civil war"],
          ['title' => "Betrayer",'author_id' => 33, 'genre_id' => 3,'date_read' => "2011-08-01",'comments' => "Book 12"]
        ]);
        //
    }
}
