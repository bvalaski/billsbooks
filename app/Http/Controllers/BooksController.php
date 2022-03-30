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
     /**$books = DB::table('books')
        ->join('genres','books.genre_id','=', 'genres.id')
        ->join('authors','books.author_id','=', 'authors.id')
        ->select('books.id','title','date_read','genres.genre','authors.lastname', 'authors.firstname')
        ->paginate(10);
*/
   //     $Books = 'TESTING only';
       
        return view('pages.index',compact(['books']));
    }

 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate inputs
         $request->validate([
          'title' => 'required',
          'date_read' => 'required',
          'isbn' => 'numeric'
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
          $bkurl = "https://covers.openlibrary.org/b/isbn/" . $bkisbn . "-M.jpg";}

  
        return view('pages.show', compact('book', 'bkurl'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     *         $gname = genre::find($book->genre_id)->genre;
        $authrec = author::find($book->author_id);
        $author = $authrec->lastname . ", " . $authrec->firstname;
        

     */
    public function edit($id)
    {
        $book = Book::FindOrFail($id);
        $bkisbn = $book->isbn;
    
        if($bkisbn=="") {
          $bkurl = "/img/Daco_5339804.png"; }
        else {
          $bkurl = "https://covers.openlibrary.org/b/isbn/" . $bkisbn . "-M.jpg";}


       return view('pages.edit', compact('book', 'bkurl'));
    }

    /**
     * Update the specified resource in storage.
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
          'isbn' => 'numeric'
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
