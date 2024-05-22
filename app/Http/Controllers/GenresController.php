<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\genre;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    /**
     * Display a listing of the genres along with a count of the
     *   number of books associated.
     */
    public function index(): View
    {
        //

        $genre_book_count = genre::select('id', 'genre')->withCount('book')->get();

        //   $books = Book::latest();
        //   $books = $books->orderByDesc('date_read')->paginate(10);

        //   return view('books.index', compact(['books']));

        return view('genres.index', compact(['genre_book_count']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        //
    }
}
