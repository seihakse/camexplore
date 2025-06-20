<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Hotel;
use App\Models\Category;
use App\Livewire\Url;

class HotelDetail extends Component
{
    public $hotelID = null;

    public function mount($id)
    {
        $this->hotelID = $id;
    }

    public function render()
    {
        $hotel = Hotel::findOrFail($this->hotelID);
        return view('livewire.hotel-detail', [
            'hotel' => $hotel,
        ]);
    }

}
