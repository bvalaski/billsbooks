<?php

/**
 * Build out initial list of books for testing
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSampleSeeder extends Seeder
{
    /**
     * Sample collection of books for review of the app features.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('books')->insert([
            ['title' => 'Brass Man', 'author_id' => 5, 'coauthor_id' => 1, 'published' => 0, 'rating' => 2, 'comments' => "'The Brass golem tangles with Dragon and Ian Cormac during a Jain technology problem'", 'date_read' => '2017-09-10', 'genre_id' => 3, 'series_id' => 1, 'owned_id' => 1, 'isbn' => "'null'"],
            ['title' => 'Human', 'author_id' => 5, 'coauthor_id' => 1, 'published' => 2020, 'rating' => 1, 'comments' => "'Earth Central and the Prador face off ina final battle against the Jain'", 'date_read' => '2022-07-05', 'genre_id' => 2, 'series_id' => 1, 'owned_id' => 1, 'isbn' => 9781949102376],
            ['title' => 'Eater of Wasps ', 'author_id' => 9, 'coauthor_id' => 1, 'published' => 2001, 'rating' => 0, 'comments' => "'Book 45'", 'date_read' => '2004-01-02', 'genre_id' => 3, 'series_id' => 16, 'owned_id' => 2, 'isbn' => "'null'"],
            ['title' => 'Corpse Marker', 'author_id' => 17, 'coauthor_id' => 1, 'published' => 1999, 'rating' => 0, 'comments' => "'null'", 'date_read' => '2004-07-01', 'genre_id' => 3, 'series_id' => 1, 'owned_id' => 2, 'isbn' => "'null'"],
            ['title' => 'Girl With All the Gifts', 'author_id' => 27, 'coauthor_id' => 1, 'published' => 0, 'rating' => 4, 'comments' => "'A distopian future finds a zombie child that can think and resist her flesh-eathing impulses.'", 'date_read' => '2018-04-03', 'genre_id' => 3, 'series_id' => 1, 'owned_id' => 1, 'isbn' => "'null'"],
            ['title' => 'Foriegner', 'author_id' => 34, 'coauthor_id' => 1, 'published' => 1994, 'rating' => 2, 'comments' => "'Book 01'", 'date_read' => '2003-05-04', 'genre_id' => 3, 'series_id' => 5, 'owned_id' => 1, 'isbn' => "'null'"],
            ['title' => 'Echo Burning', 'author_id' => 35, 'coauthor_id' => 1, 'published' => 2001, 'rating' => 2, 'comments' => "'Jack runs across a woman looking to avoid an abusive husband.'", 'date_read' => '2014-10-01', 'genre_id' => 2, 'series_id' => 19, 'owned_id' => 1, 'isbn' => "'null'"],
            ['title' => 'Angels flight', 'author_id' => 43, 'coauthor_id' => 1, 'published' => 1999, 'rating' => 10, 'comments' => "'null'", 'date_read' => '2001-11-30', 'genre_id' => 1, 'series_id' => 1, 'owned_id' => 1, 'isbn' => "'null'"],
            ['title' => 'Dark Hollow', 'author_id' => 44, 'coauthor_id' => 1, 'published' => 2020, 'rating' => 1, 'comments' => "'null'", 'date_read' => '2022-08-12', 'genre_id' => 3, 'series_id' => 36, 'owned_id' => 1, 'isbn' => 9781501122637],
            ['title' => 'Admiral', 'author_id' => 51, 'coauthor_id' => 1, 'published' => 2016, 'rating' => 2, 'comments' => "'Stranded with a crew of newbie marines, the Admiral is looking to help everyone from giving up and dying.'", 'date_read' => '2016-10-20', 'genre_id' => 3, 'series_id' => 1, 'owned_id' => 1, 'isbn' => "'null'"],
            ['title' => 'Rain Fall', 'author_id' => 67, 'coauthor_id' => 1, 'published' => 2002, 'rating' => 2, 'comments' => "'First John Rain assassin novel'", 'date_read' => '2006-08-04', 'genre_id' => 2, 'series_id' => 20, 'owned_id' => 1, 'isbn' => "'null'"],
            ['title' => 'Library of the Unwritten', 'author_id' => 90, 'coauthor_id' => 1, 'published' => 0, 'rating' => 2, 'comments' => "'Hell's Librarian must prevent a war with Heaven's angels and recover lucifer's bible'", 'date_read' => '2020-04-04', 'genre_id' => 3, 'series_id' => 1, 'owned_id' => 1, 'isbn' => "'null'"],
            ['title' => 'Rafael', 'author_id' => 92, 'coauthor_id' => 1, 'published' => 2021, 'rating' => 1, 'comments' => "'Rafael the wererat must re-establish his dominance of the pack.'", 'date_read' => '2021-06-12', 'genre_id' => 3, 'series_id' => 4, 'owned_id' => 1, 'isbn' => 9780593332917],
            ['title' => 'Dorothy Must Die', 'author_id' => 172, 'coauthor_id' => 1, 'published' => 2014, 'rating' => 2, 'comments' => "'A new girl comes to Oz to repair the damage caused by Dorothy's return'", 'date_read' => '2015-05-09', 'genre_id' => 3, 'series_id' => 1, 'owned_id' => 1, 'isbn' => "'null'"],
            ['title' => 'Prisoner: A Day In The Life', 'author_id' => 210, 'coauthor_id' => 1, 'published' => 2001, 'rating' => 4, 'comments' => "'null'", 'date_read' => '2006-08-25', 'genre_id' => 3, 'series_id' => 1, 'owned_id' => 1, 'isbn' => "'null'"],
            ['title' => 'Rogue Protocol', 'author_id' => 231, 'coauthor_id' => 1, 'published' => 2018, 'rating' => 1, 'comments' => "'#3 Murderbot works to expose the events at GrayCris that lead to his original expedition's failure.'", 'date_read' => '2018-10-01', 'genre_id' => 3, 'series_id' => 37, 'owned_id' => 1, 'isbn' => "'null'"],
            ['title' => 'Leviathan Falls', 'author_id' => 256, 'coauthor_id' => 1, 'published' => 2021, 'rating' => 1, 'comments' => "'Book 9 - Final showdown between Jim and the breakaway martians. '", 'date_read' => '2021-12-16', 'genre_id' => 3, 'series_id' => 1, 'owned_id' => 1, 'isbn' => 9780316332910],
            ['title' => 'Cold Forge', 'author_id' => 256, 'coauthor_id' => 1, 'published' => 0, 'rating' => 1, 'comments' => "'The aliens are being studied on a space station for new weapons research'", 'date_read' => '2020-08-20', 'genre_id' => 3, 'series_id' => 1, 'owned_id' => 1, 'isbn' => "'null'"],
            ['title' => 'Finder', 'author_id' => 257, 'coauthor_id' => 1, 'published' => 2019, 'rating' => 2, 'comments' => "'Finder Chronicles #1 Fergus Ferguson looks to retrieve a stolen spaceship and gets involved in a civil war'", 'date_read' => '2020-06-01', 'genre_id' => 3, 'series_id' => 1, 'owned_id' => 1, 'isbn' => "'null'"],
            ['title' => 'Tindalos Asset', 'author_id' => 267, 'coauthor_id' => 1, 'published' => 2020, 'rating' => 2, 'comments' => "'Tinfoil Dossier #3.  A burned-out investigator joins the Signalman to track down alien artifacts.'", 'date_read' => '2021-06-04', 'genre_id' => 3, 'series_id' => 1, 'owned_id' => 1, 'isbn' => 9781250191151],
            ['title' => "Never Mind, We'll Do It Ourselves", 'author_id' => 292, 'coauthor_id' => 292, 'published' => 2018, 'rating' => 2, 'comments' => "'The development history of the drone program after 911'", 'date_read' => '2021-12-23', 'genre_id' => 6, 'series_id' => 1, 'owned_id' => 1, 'isbn' => 9781510720916],
            ['title' => 'First Grave On the Right', 'author_id' => 298, 'coauthor_id' => 1, 'published' => 2012, 'rating' => 0, 'comments' => "'#1 Charley is a detective that helps solve crimes for dead people and helps them to pass on to the afterlife.  She tracks down the dark shadow, Reyes, that has been her protector all of her life.'", 'date_read' => '2022-07-09', 'genre_id' => 1, 'series_id' => 35, 'owned_id' => 1, 'isbn' => 9780312662752],
            ['title' => 'Final Girl Support Group', 'author_id' => 301, 'coauthor_id' => 1, 'published' => 2020, 'rating' => 4, 'comments' => "'The individual survivors from a decade of horror movies are being targeted by a killer looking to change the narrative.'", 'date_read' => '2022-07-14', 'genre_id' => 4, 'series_id' => 1, 'owned_id' => 1, 'isbn' => 9780593201237],
            ['title' => 'Bad Little Falls', 'author_id' => 302, 'coauthor_id' => 1, 'published' => 2019, 'rating' => 6, 'comments' => "'A detective must fight the Maine mindset of individualism to track down a killer and help a family plagued by bad luck. The detective and characters weren't that interesting.'", 'date_read' => '2022-07-19', 'genre_id' => 3, 'series_id' => 1, 'owned_id' => 1, 'isbn' => 9780312558482],
            ['title' => 'Night of th Fire', 'author_id' => 303, 'coauthor_id' => 1, 'published' => 2014, 'rating' => 10, 'comments' => "'Unfinished.  Swedish police investigate a schoolhouse fire and the immigrant issues raised by the locals'", 'date_read' => '2022-07-29', 'genre_id' => 1, 'series_id' => 1, 'owned_id' => 4, 'isbn' => 9781250766144],
            ['title' => 'Chain', 'author_id' => 304, 'coauthor_id' => 1, 'published' => 2021, 'rating' => 3, 'comments' => "'A twisted kidnap plot is perpetuated from from victim to victim.'", 'date_read' => '2022-08-14', 'genre_id' => 2, 'series_id' => 1, 'owned_id' => 1, 'isbn' => 9780316463256],
            ['title' => 'Shadow of Sorrow', 'author_id' => 305, 'coauthor_id' => 1, 'published' => 2012, 'rating' => 6, 'comments' => "'null'", 'date_read' => '2022-08-26', 'genre_id' => 1, 'series_id' => 7, 'owned_id' => 1, 'isbn' => 9781849905763],
            ['title' => 'Secret of Magic', 'author_id' => 307, 'coauthor_id' => 1, 'published' => 2022, 'rating' => 2, 'comments' => "'A lawyer in Thurgood Marshall's office is sent to Alabama to investigate the murder of a black soldier returned from the war.'", 'date_read' => '2022-06-29', 'genre_id' => 2, 'series_id' => 1, 'owned_id' => 4, 'isbn' => 9780425272787],
            ['title' => 'Triangle: The Fire That Changed America', 'author_id' => 309, 'coauthor_id' => 1, 'published' => 2014, 'rating' => 1, 'comments' => "'Investigation and resuls'", 'date_read' => '2018-05-05', 'genre_id' => 4, 'series_id' => 1, 'owned_id' => 1, 'isbn' => 9780871138743],
        ]);
    }
}
