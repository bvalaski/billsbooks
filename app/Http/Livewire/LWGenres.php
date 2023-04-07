<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\genre;
use App\Models\book;

class LWGenres extends Component
{
    public $genreID = 1;
    public $genreName = "";
    public $showaddGenremodal = true;
    public $showeditGenremodal = true;

    public function render()
    {
        $genre_book_count = genre::select("id", "genre")->withCount('book')->orderby('genre')->get();

        return view('livewire.l-w-genres', compact(['genre_book_count']));
    }
    protected $rules = [
        'genreName' => 'required|min:2',
    ];

    public function closeModal()
    {
        $this->reset();
    }

    public function genreSave()
    {

        $this->validate();

        Genre::create([
            'genre' => $this->genreName,
        ]);
        session()->flash('message', 'New Genre record created');
        return redirect()->to('/Genres');
    }

    // Display the current genre name for editing
    //   edit-genre modal included in main blade file 
    public function genreEdit(int $genreID)
    {
        $this->genreID = $genreID;
        $genreRecord = Genre::find($this->genreID);
        $this->genreName = $genreRecord->genre;
    }

    public function genreUpdate(int $genreID)
    {
        $this->validate();

        Genre::where('id', $this->genreID)->update([
            'genre' => $this->genreName
        ]);

        session()->flash('message', 'Genre record updated');

        return redirect()->to('/Genres');
    }

    public function genreDelLookup(int $genreID)
    {
        $this->genreID = $genreID;
    }

    // Verify the genre will be deleted.  If "Y", then change all book records
    //   with the current genreID to "1" Unknown and delete the genre record.
    public function genreDelete(int $genreID)
    {
        $this->genreID = $genreID;
        Book::where('genre_id', $this->genreID)->update([
            'genre_id' => 1
        ]);

        $genreRecord = Genre::find($this->genreID);
        $genreRecord->delete();
        $this->genreID = 1;

        session()->flash('message', 'Genre record deleted');
        return redirect()->to('/Genres');
    }
}
