<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\author;
use App\Models\book;

class LWAuthors extends Component
{
    public $authID = "1";
    public $auth_name = "";
    public $auth_search = "";
    public $firstname = "";
    public $lastname = "";
    public $bookID;
    public $showaddAuthormodal = false;
    public $showeditAuthormodal = false;

    public function mount()
    {
    }

    // Query the Books table and generate a count of books associated with each author.
    //    Search again for the individual records associated with the AuthID. 
    public function render()
    {

        $author_book_count = Author::when($this->auth_search, function ($query, $auth_search) {
            return $query->where('lastname', 'LIKE', "%$this->auth_search%")
                ->orWhere('firstname', 'LIKE', "%$this->auth_search%");
        })->withCount('book')->orderBy('lastname')->get();
        $book_list = Author::find($this->authID)->book;
        $auth_info = Author::find($this->authID);
        //        $this->authSubmit();
        //dd($author_book_count ,$book_list,$auth_info);


        return view('livewire.l-w-authors', compact(['author_book_count', 'book_list', 'auth_info']));
    }

    protected $rules = [
        'firstname' => 'required|min:2',
        'lastname' => 'required|min:2',
    ];

    public function authorSave()
    {

        $this->validate();

        Author::create([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname
        ]);
        session()->flash('message', 'New Author record created');
        return redirect()->to('/Authors');
        //        $this->dispatchBrowserEvent('close-modal');
    }

    // Display the current auther name for editing
    //   edit-author modal included in main blade file 
    public function authEdit(int $authID)
    {
        $showauthEditmodal = true;
        $author = Author::find($this->authID);
        $this->firstname = $author->firstname;
        $this->lastname = $author->lastname;
    }


    public function closeModal()
    {
        $this->resetExcept('authID');
    }


    // Display the current auther name for editing
    //   edit-author modal included in main blade file 
    public function authUpdate(int $authID)
    {
        $this->validate();

        Author::where('id', $this->authID)->update([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname
        ]);

        session()->flash('message', 'Author record updated');

        //       $this->showeditAuthormodal=false;
        //       $this->dispatchBrowserEvent('close-modal');
        return redirect()->to('/Authors');
    }

    public function authDelLookup(int $authID)
    {
        $this->authID = $authID;
    }

    // Verify the author will be deleted.  If "Y", then change all book records
    //   with the current authID to "1" Missing Author and delete the author record.
    public function authDelete(int $authID)
    {
        $authID = $this->authID;
        Book::where('author_id', $this->authID)->update([
            'author_id' => 1
        ]);

        $auth_info = Author::find($authID);
        $auth_info->delete();
        $this->authID = 1;

        session()->flash('message', 'Author record deleted');
        return redirect()->to('/Authors');
    }

    // Call the Book controller view for editing
    public function bookUpdate(int $bookID)
    {
        return redirect()->to("/Books/$bookID/edit");
    }

    // Call the Book create method with a generic title, today's 
    //    date, and the Author ID pre-supplied.  Once the record is 
    //    created, send the user to books.edit to fill in details
    public function bookAdd(int $authID)
    {
        $bookTitle = "New Book";
        $bookDateRead = today();

        $result = Book::create(['title'=>$bookTitle, 'date_read'=>$bookDateRead,'author_id'=> $authID,]);
        $bookLast = book::latest()->first()->id;
        return redirect()->to("/Books/$bookLast/edit");
   }
}
