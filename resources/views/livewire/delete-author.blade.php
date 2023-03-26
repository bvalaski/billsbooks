<div wire:ignore.self class="modal fade" id="deleteAuthorModal" tabindex="-1" aria-labelledby="deleteAuthorLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteAuthorLabel">Delete Author Confirmation</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="authDelete({{$this->authID}})">
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