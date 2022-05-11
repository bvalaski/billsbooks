<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\book;
use App\Models\genre;
use App\Models\author;

class BooksController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

     $books = Book::latest();
     $books = $books->orderByDesc('date_read')->paginate(10);
     
     return view('books.index',compact(['books']));
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
 
         return view('books.create',compact(['auth_list','coauth_list','genres_list', 'owned_list','series_list']));
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
      $request->merge(['series_id' => NULL]);
    }
//    dd($request->all(), $new_author_id, $new_coauthor_id);
        // validate inputs
         $request->validate([
          'title' => 'required',
          'date_read' => 'required',
          'isbn' => 'nullable | numeric'
          ]);
          
        //create book record
        Book::create($request->all());
        
        // redirect user and send status
        return redirect()->route('Books.index')->with('success','Book created successfully'); 
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        $book = Book::FindOrFail($id);
        $bkisbn = $book->isbn;
    
        if($bkisbn=="") {
          $bkurl = "/img/Daco_5339804.png"; }
        else {
          $bkurl = "https://covers.openlibrary.org/b/isbn/" . $bkisbn . "-L.jpg";}

  
        return view('books.show', compact('book', 'bkurl'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     *         $gname = genre::find($book->genre_id)->genre;
     *   $authrec = author::find($book->author_id);
     *   $author = $authrec->lastname . ", " . $authrec->firstname;
     *
     */
    public function edit($id)
    {
        $book = Book::FindOrFail($id);
        $bkisbn = $book->isbn;
    
        if($bkisbn=="") {
          $bkurl = "/img/Daco_5339804.png"; }
        else {
          $bkurl = "https://covers.openlibrary.org/b/isbn/" . $bkisbn . "-L.jpg";}


       return view('books.edit', compact('book', 'bkurl'));
    }

    /**
     * Update the specified resource in storage.
     *   MAKE SURE to update the validation in the store function
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     //   dd($book);
    
        $request->validate([
          'title' => 'required',
          'date_read' => 'required',
          'isbn' => 'nullable | numeric'
          ]);
          
        //create book record
        $book = Book::find($id);
        $book->update($request->all());
        
        // redirect user and send status
        return redirect()->back()->with('success','Book updated successfully'); 
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
        return redirect()->route('Books.index')->with('success','Book record deleted successfully'); 
    }
}
