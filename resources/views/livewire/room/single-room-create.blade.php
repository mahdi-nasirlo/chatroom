<div class="flex w-full">
    <div class="flex-1 mx-4">
        <input wire:model.debounce.1000ms='message' class="w-full border rounded px-2 py-2" type="text" />
    </div>

    <div wire:click='send' class="flex items-center">
        <x-zondicon-send class="w-5 h-5 text-gray-400 hover:text-gray-700" />
    </div>
</div>
