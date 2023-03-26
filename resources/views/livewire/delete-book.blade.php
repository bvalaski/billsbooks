<div wire:ignore.self class="modal fade" id="deleteBookModal" tabindex="-1" aria-labelledby="deleteBookLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteBookLabel">Delete Book Confirmation</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="bookDelete({{$book->id}})">
                <div class="modal-body">
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" wire:click="closeModal" 
                     data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" >Yes, Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>