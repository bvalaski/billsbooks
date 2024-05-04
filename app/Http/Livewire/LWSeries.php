<?php

namespace App\Http\Livewire;

use App\Models\book;
use App\Models\series;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;

class LWSeries extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $seriesID = 1;

    public $seriesName = '';

    public $showaddSeriesmodal = true;

    public $showeditSeriesmodal = true;

    public function mount()
    {
        Session::forget('book_url');

    }

    public function render()
    {
        $series_book_count = series::select('id', 'series')->withCount('book')->orderby('series')->paginate(10);

        return view('livewire.l-w-series', compact(['series_book_count']));
    }

    protected $rules = [
        'seriesName' => 'required|min:2',
    ];

    public function closeModal()
    {
        $this->reset();
    }

    public function seriesSave()
    {

        $this->validate();

        Series::create([
            'series' => $this->seriesName,
        ]);
        session()->flash('message', 'New Series record created');

        return redirect()->to('/Series');
    }

    // Redirect the viewer to the Books view with
    //  a filter based on the series #
    public function seriesShow(int $seriesID)
    {
        $this->seriesID = $seriesID;

        return redirect()->to('/Books/s'.$seriesID);

    }

    // Display the current genre name for editing
    //   edit-genre modal included in main blade file
    public function seriesEdit(int $seriesID)
    {
        $this->seriesID = $seriesID;
        $seriesRecord = Series::find($this->seriesID);
        $this->seriesName = $seriesRecord->series;
    }

    public function seriesUpdate(int $seriesID)
    {
        $this->seriesID = $seriesID;
        $this->validate();

        Series::where('id', $this->seriesID)->update([
            'series' => $this->seriesName,
        ]);

        session()->flash('message', 'Series record updated');

        return redirect()->to('/Series');
    }

    public function seriesDelLookup(int $seriesID)
    {
        $this->seriesID = $seriesID;
    }

    // Verify the genre will be deleted.  If "Y", then change all book records
    //   with the current genreID to "1" Unknown and delete the genre record.
    public function seriesDelete(int $seriesID)
    {
        $this->seriesID = $seriesID;
        Book::where('series_id', $this->seriesID)->update([
            'series_id' => null,
        ]);

        $seriesRecord = Series::find($this->seriesID);
        $seriesRecord->delete();
        $this->seriesID = 1;

        session()->flash('message', 'Series record deleted');

        return redirect()->to('/Series');
    }
}
