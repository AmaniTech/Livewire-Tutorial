<div>
    <form wire:submit.prevent="update">
        {{-- input hidden --}}
        <input type="hidden" wire:model="contactId">
        {{-- input hidden --}}

        <div class="col-lg-5 mb-3">
            <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                placeholder="Name...">

            @error('name')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="col-lg-5 mb-3">
            <input wire:model="contact" type="text" class="form-control @error('contact') is-invalid @enderror"
                name="phone" placeholder="Phone...">
            @error('contact')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
    </form>

</div>
