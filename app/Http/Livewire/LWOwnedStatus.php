<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\owned;
use App\Models\book;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Session;

class LWOwnedStatus extends Component
{
    Use WithPagination;
    
    protected $paginationTheme = 'bootstrap';

    public $ownedstatusID = 1;
    public $ownedstatusName = "";
    public $showaddOwnedmodal = true;
    public $showeditOwnedmodal = true;

    public function mount()
    {
            Session::forget('book_url');
    
    }    public function render()
    {
        $ownedstatus_book_count = owned::select("id", "owned_status")->withCount('book')->
        orderby('owned_status')->paginate(10);

        return view('livewire.l-w-owned-status', compact(['ownedstatus_book_count']));
    }
    protected $rules = [
        'ownedstatusName' => 'required|min:2',
    ];

    public function closeModal()
    {
        $this->reset();
    }

    public function ownedstatusSave()
    {

        $this->validate();

        Owned::create([
            'owned_status' => $this->ownedstatusName,
        ]);
        session()->flash('message', 'New Owned Status record created');
        return redirect()->to('/Owned');
    }

    // Redirect the viewer to the Books view with
    //  a filter based on the OwnedStatus # 
    public function ownedstatusShow(int $ownedstatusID)
    {
        $this->ownedstatusID = $ownedstatusID;

        return redirect()->to('/Books/o' . $ownedstatusID);

    }

    // Display the current genre name for editing
    //   edit-genre modal included in main blade file 
    public function ownedstatusEdit(int $ownedstatusID)
    {
        $this->ownedstatusID = $ownedstatusID;
        $ownedRecord = Owned::find($this->ownedstatusID);
        $this->ownedstatusName = $ownedRecord->owned_status;
    }

    public function ownedstatusUpdate(int $ownedstatusID)
    {
        $this->ownedstatusID = $ownedstatusID;
        $this->validate();

        Owned::where('id', $this->ownedstatusID)->update([
            'owned_status' => $this->ownedstatusName
        ]);

        session()->flash('message', 'Owned Status record updated');

        return redirect()->to('/Owned');
    }

    public function ownedstatusDelLookup(int $ownedstatusID)
    {
        $this->ownedstatusID = $ownedstatusID;
    }

    // Verify the genre will be deleted.  If "Y", then change all book records
    //   with the current genreID to "1" Unknown and delete the genre record.
    public function ownedstatusDelete(int $ownedstatusID)
    {
        $this->ownedstatusID = $ownedstatusID;
        Book::where('owned_id', $this->ownedstatusID)->update([
            'owned_id' => null
        ]);

        $ownedRecord = Owned::find($this->ownedstatusID);
        $ownedRecord->delete();
        $this->ownedstatusID = 1;

        session()->flash('message', 'Owned Status record deleted');
        return redirect()->to('/Owned');
    }
}
