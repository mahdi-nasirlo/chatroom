<div>
    <div class="text-center mt-9">
        <h2 class="text-4xl tracking-tight mb-4">
            ساخت چت روم
        </h2>
    </div>
    <div class="flex justify-center my-2 mx-4 md:mx-0">

        <div class="w-full md:w-1/2 bg-white rounded-lg shadow-md p-6">
            <livewire:room.create-room>
                @foreach ($rooms as $room)
                    <div class="flex flex-row-reverse py-1 px-2 my-2 bg-slate-100 rounded-md">
                        <a href="{{ $room->link() }}" class="underline w-full text-right block">{{ $room->name }}</a>

                        @if ($room->user->id == auth()->user()->id)
                            <span class="cursor-pointer hover:bg-blue-500 hover:text-white p-1 rounded-md"
                                wire:click="deleteRoom({{ $room }})">حذف</span>
                        @endif
                    </div>
                @endforeach
        </div>
    </div>
</div>
</div>
