<div>
    <div class="text-center mt-9">
        <h2 class="text-4xl tracking-tight mb-4">
            ساخت چت روم
        </h2>
    </div>
    <div class="flex justify-center my-2 mx-4 md:mx-0">

        <div class="w-1/2 bg-white rounded-lg shadow-md p-6">
            <livewire:room.create-room>
                @foreach ($rooms as $room)
                    <div>
                        <a href="{{ $room->link() }}" class="underline w-full text-right block">{{ $room->name }}</a>
                    </div>
                @endforeach
        </div>
    </div>
</div>
</div>
