<div wire:ignore.self class="modal fade" @if($showaddAuthormodal) style="display:block" @endif id="addAuthorModal"
    tabindex="-1" aria-labelledby="addAuthorLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addAuthorLabel">Add new author</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="authorSave">
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" wire:model="firstname" placeholder="First name">
                        @error('firstname') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" wire:model="lastname" placeholder="Last name">
                        @error('lastname') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal" 
                     data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>