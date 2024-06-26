<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\book;
use App\Models\genre;
use App\Models\author;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class BooksController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

    $books = Book::with('Author')->with('Genre')->orderByDesc('date_read')->paginate(10);

    Session::forget('book_url');

    return view('books.index', compact(['books']));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $auth_list =  DB::table('authors')->orderBy('lastname')->get();
    $coauth_list =  DB::table('authors')->orderBy('lastname')->get();
    $genres_list = DB::table('genres')->orderBy('genre')->get();
    $owned_list = DB::table('owned')->orderBy('owned_status')->get();
    $series_list =  DB::table('series')->orderBy('series')->get();

    return view('books.create', compact(['auth_list', 'coauth_list', 'genres_list', 'owned_list', 'series_list']));
  }

  /**
   * Store a newly created resource in storage.
   *   MAKE SURE to update the validation in the update function
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {

    $new_author_id = $request->input('author_id');
    if ($new_author_id == "Author") {
      $request->merge(['author_id' => 1]);
    }

    $new_coauthor_id = $request->input('coauthor_id');
    if ($new_coauthor_id == "Co-Author") {
      $request->merge(['coauthor_id' => 1]);
    }

    $new_series_id = $request->input('series_id');
    if ($new_series_id == "Series") {
      $request->merge(['series_id' => 1]);
    }

    $new_genre_id = $request->input('genre_id');
    if ($new_genre_id == "Choose Genre") {
      $request->merge(['genre_id' => 1]);
    }

    $new_owned_id = $request->input('owned_id');
    if ($new_owned_id == "Book owned?") {
      $request->merge(['owned_id' => 1]);
    }

    //    dd($request->all(), $new_author_id, $new_coauthor_id);
    
    $tomorrow = Carbon::tomorrow();
    $request->validate([

      'title' => 'required | max:253',
      'date_read' => 'required | date | before_or_equal:tomorrow',
      'rating' => 'numeric',
      'isbn' => 'nullable | numeric',
      'comments' => 'max:253'
    ]);

    //create book record
    Book::create($request->all());

    // redirect user and send status
    return redirect()->route('Books.index')->with('success', 'Book created successfully');
  }

  /**
   * Display the specified book record based on ID.
   *   If the ID starts with a letter, display a filtered list
   *   of Genre, Owned, or Series
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    if (! session()->has('book_url')){
      session()->put('book_url',url()->current());
    }
    
    $filter = substr($id, 0, 1);
    if ($filter == 's' || $filter == 'g' || $filter == 'o') {
      switch ($filter) {
        case "g":
          $dbfilter = 'genre_id';
          break;
        case "o":
          $dbfilter = 'owned_id';
          break;
        case "s":
          $dbfilter = 'series_id';
          break;
      }

      $books = Book::with('Author')->with('Genre')->where($dbfilter, "=", substr($id, 1))->orderByDesc('date_read')->paginate(10);

      return view('books.index', compact(['books']));
    } else {
      $book = Book::FindOrFail($id);

      // If ISBN is blank, show the "missing" book cover    
      $check_val = $book->isbn;
      if ($check_val == "") {
        $bkurl = "/img/Daco_5339804.png";
      } else {
        $bkurl = "https://covers.openlibrary.org/b/isbn/" . $check_val . "-L.jpg";
      }

      // If no series selected, show a blank value    
      $check_val = $book->series_id;
      if ($check_val == NULL) {
        $bk_series = "";
      } else {
        $bk_series =  $book->series->series;
      }

      // If no co-authorselected, show a blank value, otherwise get the co-author name  
      $check_val = $book->coauthor_id;
      if ($check_val == NULL) {
        $bk_coauth = "";
      } else {
        $bk_coauth = $book->coauthor->lastname . ", " . $book->coauthor->firstname;
      }

      return view('books.show', compact('book', 'bk_coauth', 'bkurl', 'bk_series'));
    }
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   * 
   */
  public function edit($id)
  {
    if (! session()->has('book_url')){
      session()->put('book_url',url()->current());
    }

    //Load the select lists
    $auth_list =  DB::table('authors')->orderBy('lastname')->get();
    $coauth_list =  $auth_list;
    //   $coauth_list =  DB::table('authors')->orderBy('lastname')->get();
    $genres_list = DB::table('genres')->orderBy('genre')->get();
    $owned_list = DB::table('owned')->orderBy('owned_status')->get();
    $series_list =  DB::table('series')->orderBy('series')->get();

    //Get the book record selected
    $book = Book::FindOrFail($id);

    //Extract the ISBN #.  If it's empty use a generic image, otherwise query OpenLibrary for the cover art
    $bkisbn = $book->isbn;

    if ($bkisbn == "") {
      $bkurl = "/img/Daco_5339804.png";
    } else {
      $bkurl = "https://covers.openlibrary.org/b/isbn/" . $bkisbn . "-L.jpg";
    }

    // If no series selected, show a blank value    
    $check_val = $book->series_id;
    if ($check_val == NULL) {
      $bk_series = "";
    } else {
      $bk_series =  $book->series->series;
    }

    // If no author selected, show a blank value, otherwise get the author name  
    $check_val = $book->author_id;
    if ($check_val == NULL) {
      $bk_author = "";
    } else {
      $bk_author = $book->author->lastname . ", " . $book->author->firstname;
    }

    // If no co-author selected, show a blank value, otherwise get the co-author name  
    $check_val = $book->coauthor_id;
    if ($check_val == NULL) {
      $bk_coauth = "";
    } else {
      $bk_coauth = $book->coauthor->lastname . ", " . $book->coauthor->firstname;
    }

    //    dd($bk_series,$bk_author, $bk_coauth);
    // dd($book, $bkurl, $auth_list, $coauth_list);
    return view('books.edit', compact(['book', 'bkurl', 'bk_author', 'bk_coauth', 'bk_series', 'auth_list', 'coauth_list', 'genres_list', 'owned_list', 'series_list']));
  }

  /**
   * Update the specified resource in storage and clean up any 
   *   un-selected choices
   *   MAKE SURE to update the validation in the store function
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //       dd($request->all());

    $tomorrow = Carbon::tomorrow();
    $request->validate([

      'title' => 'required | max:253',
      'date_read' => 'required | date | before_or_equal:tomorrow',
      'rating' => 'numeric',
      'isbn' => 'nullable | numeric',
      'comments' => 'max:253'
    ]);

    $new_author_id = $request->input('author_id');
    if ($new_author_id == "Author") {
      $request->merge(['author_id' => 1]);
    }

    $new_coauthor_id = $request->input('coauthor_id');
    if ($new_coauthor_id == "Co-Author") {
      $request->merge(['coauthor_id' => 1]);
    }

    $new_series_id = $request->input('series_id');
    if ($new_series_id == "Series") {
      $request->merge(['series_id' => 1]);
    }

    $new_genre_id = $request->input('genre_id');
    if ($new_genre_id == "Choose Genre") {
      $request->merge(['genre_id' => 1]);
    }

    $new_owned_id = $request->input('owned_id');
    if ($new_owned_id == "Book owned?") {
      $request->merge(['owned_id' => 1]);
    }

    //update the book record
    $book = Book::find($id);


    $book->update($request->all());

    if ($request->session()->has('book_url')) {
      return redirect(session('book_url'));
    }

    // redirect user and send status
    return redirect()->back()->with('success', 'Book updated successfully');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $book = Book::find($id);
    $book->delete();

    // redirect user and send status
    return redirect()->route('Books.index')->with('success', 'Book record deleted successfully');
  }

}
