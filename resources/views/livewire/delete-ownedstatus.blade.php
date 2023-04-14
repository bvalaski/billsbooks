<div wire:ignore.self class="modal fade" id="deleteOwnedStatusModal" tabindex="-1" aria-labelledby="deleteOwnedStatusLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteOwnedStatusLabel">Delete series Confirmation</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="ownedstatusDelete({{$this->ownedstatusID}})">
                <div class="modal-body">
                       <p>This value will be removed for all associated books</p>
                       <p>Are you sure want to delete the ownership status?</p>
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