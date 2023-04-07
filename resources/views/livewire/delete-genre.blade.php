<div wire:ignore.self class="modal fade" id="deleteGenreModal" tabindex="-1" aria-labelledby="deleteGenreLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteGenreLabel">Delete Genre Confirmation</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="genreDelete({{$this->genreID}})">
                <div class="modal-body">
                  <p>Books will re-classify as Unknown</p>
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