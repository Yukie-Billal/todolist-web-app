<div>
    <button wire:loading.class='d-none' class="bg-none" wire:click='buatNama'>
        Tekan Untuk memunculkan
    </button>
    
    <input type="text" wire:model.lazy='nama' class="form-control">
    
    <input wire:model='input'>
    {{ $input }}
    {{ $text }}
    <div wire:loading.class='bg-primary'>
        Ini testing Kata loading background
    </div>
    
    <div class="bg-success" wire:loading wire:target='buatNama'>
        <div wire:load='$emit("setData")'></div>
        loading nama ...
    </div>
</div>
@push('scripts')
    <script wire:loading wire:target='buatNama'>
        alert('loading');
    </script>

    <script>
        Livewire.on('setData', function () {
            console.log("Set data berhasil");
        });
    </script>
@endpush