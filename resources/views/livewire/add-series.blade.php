<div wire:ignore.self class="modal fade" id="addSeriesModal"
    tabindex="-1" aria-labelledby="addSeriesModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addSeriesLabel">Create Series title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="seriesSave">
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" wire:model="seriesName" placeholder="Series type">
                        @error('seriesName') <span class="error">{{ $message }}</span> @enderror
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