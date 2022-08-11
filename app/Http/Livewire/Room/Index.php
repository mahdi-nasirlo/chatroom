<?php

namespace App\Http\Livewire\Room;

use App\Events\RoomAdded;
use App\Models\Room;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = [
        'room.add' => '$refresh',
        'echo-private:room.added,RoomAdded' => '$refresh',
    ];

    public function deleteRoom(Room $room)
    {
        $room->delete();
        broadcast(new RoomAdded())->toOthers();
    }

    public function render()
    {
        $rooms = Room::all();

        return view('livewire.room.index', ['rooms' => $rooms]);
    }
}
