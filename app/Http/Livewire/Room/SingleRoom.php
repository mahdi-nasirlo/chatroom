<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class SingleRoom extends Component
{
    public Room $room;

    // protected $listeners = [
    //     'room.add.message' => "\\",
    //     "echo-private:message.added.{$this->room->id},Room/MessageAdded" => '$refresh',

    // ];

    public function getListeners()
    {
        return [
            'room.add.message' => '$refresh',
            "echo-private:message.added.{$this->room->id},Room\\MessageAdded" => '$refresh',
        ];
    }


    public function render()
    {
        $messages = $this->room->messages()->with('user')->get();

        return view('livewire.room.single-room', ['messages' => $messages]);
    }
}
