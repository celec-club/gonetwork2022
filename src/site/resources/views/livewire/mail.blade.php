<div>
    <div wire:loading>
        Processing
    </div>
    <form wire:submit.prevent="save">
        <input class="form-control" type="file" wire:model="excel">
        @error('excel') <span class="error">{{ $message }}</span> @enderror
        <br/>
        <button class="btn btn-outline-success" type="submit">Send</button>
        <br/>
    </form>
</div>
