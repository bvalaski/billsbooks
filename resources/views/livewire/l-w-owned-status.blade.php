<div>
    @include('livewire.add-ownedstatus')
    @include('livewire.edit-ownedstatus')
    @include('livewire.delete-ownedstatus')

    <div class="container">
        <div class="row">
            <div class="col-med-3 col-lg-3">
            </div>
            <div class="col-med-6 col-lg-6">
                <div class="row">
                    <div class="col-med-7 col-lg-7">
                        <div class="pull-left">
                            <h2>Book owned status</h2>
                        </div>
                    </div>
                    <div class="col-med-5 col-lg-5">
                        <div class="pull-right">
                            <button type="button" class="btn btn-success mt-2 mb-2" data-bs-toggle="modal"
                                data-bs-target="#addOwnedStatusModal">Create new Owned Status</button>
                        </div>
                    </div>
                </div>

                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <table class="table table-bordered border-dark table-striped">
                    {{-- Check if no owned status records returned --}}
                    @if(empty($ownedstatus_book_count))
                    @else
                    <tr>
                        <th>Owned Status</th>
                        <th width="100px">Book count</th>
                        <th class=text-center width="180px">Label Action</th>
                        <th width="150px"> </th>
                    </tr>
                    @endif

                    @forelse ($ownedstatus_book_count as $ownedstatus)
                    <tr>
                        <td>{{$ownedstatus->owned_status }}
                        </td>
                        <td class=text-center>{{$ownedstatus->book_count }}</td>
                        <td class=text-center>
                            <button type="button" wire:click.prevent="ownedstatusEdit({{$ownedstatus->id}})"
                                class="btn btn-warning mt-1" data-bs-toggle="modal"
                                data-bs-target="#editOwnedStatusModal">
                                Edit</button>
                            <button type="button" wire:click.prevent="ownedstatusDelLookup({{$ownedstatus->id}})"
                                class="btn btn-danger mt-1" data-bs-toggle="modal"
                                data-bs-target="#deleteOwnedStatusModal">
                                Delete</button>
                        </td>
                        <td class=text-center>
                            <button type="button" wire:click.prevent="ownedstatusShow({{$ownedstatus->id}})"
                                class="btn btn-primary mt-1" data-bs-toggle="modal" data-bs-target="">
                                Show Books</button>
                        </td>
                    </tr>
                    @empty
                    <h1>No owned status values present - please add one.</h1>
                    @endforelse

                </table>
                {{$ownedstatus_book_count->links()}}
            </div>
            <div class="col-med-3 col-lg-3">
            </div>
        </div>
    </div>
</div>