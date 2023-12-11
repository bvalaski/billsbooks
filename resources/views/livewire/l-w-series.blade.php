<div>
    @include('livewire.add-series')
    @include('livewire.edit-series')
    @include('livewire.delete-series')

    <div class="container">
        <div class="row">
            <div class="col-med-3 col-lg-3">
            </div>
            <div class="col-med-6 col-lg-6">
                <div class="row">
                    <div class="col-med-8 col-lg-8">
                        <div class="pull-left">
                            <h2>Book series</h2>
                        </div>
                    </div>
                    <div class="col-med-4 col-lg-4">
                        <div class="pull-right">
                            <button type="button" class="btn btn-success mt-2 mb-2" data-bs-toggle="modal"
                                data-bs-target="#addSeriesModal">Create new Series</button>
                        </div>
                    </div>
                </div>

                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <table class="table table-bordered border-dark table-striped table-sm">
                    {{-- Check if no series records returned --}}
                    @if(empty($series_book_count))
                    @else
                    <tr>
                        <th>Series</th>
                        <th width="100px">Book count</th>
                        <th class=text-center width="180px">Label Action</th>
                        <th width="150px"> </th>
                    </tr>
                    @endif

                    @forelse ($series_book_count as $series)
                    <tr>
                        <td>{{$series->series }}</td>
                        <td class=text-center>{{$series->book_count }}</td>
                        <td class=text-center>
                            <button type="button" wire:click.prevent="seriesEdit({{$series->id}})"
                                class="btn btn-warning mt-1" data-bs-toggle="modal" data-bs-target="#editSeriesModal">
                                Edit</button>
                            <button type="button" wire:click.prevent="seriesDelLookup({{$series->id}})"
                                class="btn btn-danger mt-1" data-bs-toggle="modal" data-bs-target="#deleteSeriesModal">
                                Delete</button>
                        </td>
                        <td class=text-center>
                            <button type="button" wire:click.prevent="seriesShow({{$series->id}})"
                                class="btn btn-primary mt-1" data-bs-toggle="modal" data-bs-target="">
                                Show Books</button>
                        </td>

                    </tr>
                    @empty
                    {{-- <h1>No series created - please add one.</h1> --}}
                    @endforelse

                </table>
                {{$series_book_count->links()}}
            </div>
            <div class="col-med-3 col-lg-3">
            </div>
        </div>
    </div>
</div>