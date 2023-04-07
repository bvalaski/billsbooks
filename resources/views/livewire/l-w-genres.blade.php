<div>
    @include('livewire.add-genre')
    @include('livewire.edit-genre')
    @include('livewire.delete-genre')

    <div class="container">
        <div class="row">
            <div class="col-med-3 col-lg-3">
            </div>
            <div class="col-med-6 col-lg-6">
                <div class="row">
                    <div class="col-med-8 col-lg-8">
                        <div class="pull-left">
                            <h2>Genres</h2>
                        </div>
                    </div>
                    <div class="col-med-4 col-lg-4">
                        <div class="pull-right">
                            <button type="button" class="btn btn-primary mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#addGenreModal">Create New Genre</button>
                        </div>
                    </div>
                </div>

                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <table class="table table-bordered border-dark table-striped">
                    <tr>
                        <th>Genre</th>
                        <th width="100px">Book count</th>
                        <th width="200px">Action</th>
                    </tr>

                    @foreach ($genre_book_count as $genre)
                    <tr>
                        <td>{{$genre->genre }}</td>
                        <td>{{$genre->book_count }}</td>
                        <td>
                            <button type="button" wire:click.prevent="genreEdit({{$genre->id}})"
                                class="btn btn-warning mt-1 @if ($genre->id == 1) disabled  @endif "
                                data-bs-toggle="modal" data-bs-target="#editGenreModal">
                                Edit</button>
                            <button type="button" wire:click.prevent="genreDelLookup({{$genre->id}})"
                                class="btn btn-danger mt-1 @if ($genre->id == 1) disabled  @endif"
                                data-bs-toggle="modal" data-bs-target="#deleteGenreModal">
                                Delete</button>
                        </td>
                    </tr>
                    @endforeach

                </table>
            </div>
            <div class="col-med-3 col-lg-3">
            </div>
        </div>
    </div>
</div>