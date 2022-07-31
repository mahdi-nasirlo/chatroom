<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['room.add' => '$refresh'];

    public function render()
    {
        $rooms = Room::all();

        return view('livewire.room.index', ['rooms' => $rooms]);
    }
}
