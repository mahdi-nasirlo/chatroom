<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class SingleRoom extends Component
{
    public Room $room;

    protected $listeners = ['room.add.message' => '$refresh'];

    public function render()
    {
        $messages = $this->room->messages()->with('user')->latest()->get();

        return view('livewire.room.single-room', ['messages' => $messages]);
    }
}
