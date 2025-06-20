<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Destination;

class DestinationDetail extends Component
{
    public $destinationID = null;

    public function mount($id)
    {
        $this->destinationID = $id;
    }

    public function render()
    {
        $destination = Destination::findOrFail($this->destinationID);
        return view('livewire.destination-detail', [
            'destination' => $destination,
        ]);
    }
}
