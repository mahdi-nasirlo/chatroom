<?php

namespace App\Http\Livewire\Room;

use App\Events\Room\MessageAdded;
use Livewire\Component;

class SingleRoomCreate extends Component
{
    public $message;
    public $room;

    protected $rules = ['message' => 'required'];

    public function mount($roomId)
    {
        $this->room = $roomId;
    }

    public function send()
    {
        $this->validate();

        auth()->user()->messages()->create([
            'message' => $this->message,
            'room_id' => $this->room
        ]);

        $this->emit("room.add.message");

        broadcast(new MessageAdded($this->room))->toOthers();

        $this->message = '';
    }

    public function render()
    {
        return view('livewire.room.single-room-create');
    }
}
