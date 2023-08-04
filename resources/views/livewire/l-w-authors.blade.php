<div>
  @include('livewire.add-author')
  @include('livewire.edit-author')
  @include('livewire.delete-author')
  {{-- @include('livewire.delete-book') --}}

  <div class="container">
    <div class="row">
      <div class="col-med-2 col-lg-2">
        <form wire:submit.prevent="authSubmit" method="POST">
          {{-- Author name listing with # of books associated --}}
          <select class="form-select mt-2 mb-2" wire:model="authID" size="20" id=auth_bk_sel name="auth_sel_id"
            aria-label="Author">
            @foreach ($author_book_count as $author_label)
            <option @if ($author_label->id == $this->authID)
              selected="selected"
              @endif
              value={{$author_label->id}}>{{$author_label->lastname.", ".$author_label->firstname."
              (".$author_label->book_count.")"}}</option>
            @endforeach
          </select>
          <div class="form-floating">
            <textarea wire:model="auth_search" class="form-control" placeholder="Author Search"
              id="floatingTextarea" autofocus></textarea>
            <label for="floatingTextarea">Search</label>
          </div>
          <button type="button" class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#addAuthorModal">Add
            new Author</button>
          @csrf
        </form>
      </div>
      {{-- Author name displayed with edit buttons --}}
      <div class="col-med-10 col-lg-10">
        <div class="row">
          <div class="col-med-7 col-lg-7">
            <h1>Titles by {{$auth_info->firstname . " " . $auth_info->lastname}} </h1>
          </div>
          <div class="col-med-5 col-lg-5">
            <button type="button" wire:click.prevent="authEdit({{$this->authID}})"
              class="btn btn-warning mt-1 @if ($this->authID == 1) disabled  @endif " data-bs-toggle="modal"
              data-bs-target="#editAuthorModal">
              Edit Author</button>
            <button type="button" wire:click.prevent="authDelLookup({{$this->authID}})"
              class="btn btn-danger mt-1 @if ($this->authID == 1) disabled  @endif" data-bs-toggle="modal"
              data-bs-target="#deleteAuthorModal">
              Delete Author</button>
            <button type="button" wire:click.prevent="bookAdd({{$this->authID}})"
              class="btn btn-primary mt-1 @if ($this->authID == 1) disabled  @endif">Add Book</button>
          </div>
        </div>
        {{-- Books related to Author, displayed with edit buttons --}}
        <div>
          @if (session()->has('message'))
          <div class="alert alert-success">
            {{ session('message') }}
          </div>
          @endif
        </div>
        <table class="table table-bordered border-dark table-striped">
          <tr>
            <th>Title</th>
            <th>Series</th>
            <th class="text-center"width="80px">Pub.</th>
            <th class="text-center" width="100px">Read</th>
            <th class="text-center" width="80px">Rating</th>
            <th class="text-center" width="90px">Cover</th>
            <th class="text-center" width="90px">Action</th>
          </tr>
          @foreach ($book_list as $book)
          <tr style="height:80px">
            <td>{{$book->title }}</td>
            <td>{{$book->Series->series}}</td>
            <td class="text-center">{{$book->published }}</td>
            <td class="text-center">{{$book->date_read }}</td>
            <td class="text-center">{{$book->rating }}</td>
            @if (empty($book->isbn))
            <td class="text-center"><img src="/img/Daco_5339804.png" class="img-fluid h-50" alt="Cover" width="60" height="60"></td>

            @else
            <td class="text-center"><img src="https://covers.openlibrary.org/b/isbn/{{$book->isbn}}-S.jpg" class="img-fluid h-50"
                alt="Cover">
            </td>

            @endif
            <td class="text-center">
              <button type="button" wire:click.prevent="bookUpdate({{$book->id}})" class="btn btn-warning text-center">Edit
              </button>
            </td>
          </tr>

          @endforeach
        </table>

        {{$book_list->links()}}

      </div>
    </div>
  </div>
</div>