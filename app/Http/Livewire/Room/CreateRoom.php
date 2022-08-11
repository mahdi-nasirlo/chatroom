<?php

namespace App\Http\Livewire\Room;

use App\Events\RoomAdded;
use App\Models\Room;
use Livewire\Component;
use Illuminate\Support\Str;

class CreateRoom extends Component
{
    public $roomName;

    protected $rules = [
        'roomName' => 'required|min:2|unique:rooms,slug'
    ];

    public function create()
    {
        $this->validate();

        auth()->user()->rooms()->create([
            'name' => $this->roomName,
            'slug' => Str::random(10)
        ]);

        $this->emit("room.add");

        broadcast(new RoomAdded())->toOthers();

        $this->roomName = '';
    }

    public function render()
    {
        return view('livewire.room.create-room');
    }
}
