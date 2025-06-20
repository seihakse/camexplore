<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Destination;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Url;


class ShowDestination extends Component
{
    #[Url]
    public $categorySlug = null;
    public function render()
    {
        $categories = Category::all();

        if(!empty($this->categorySlug)) {
            $category = Category::where('slug', $this->categorySlug)->first();
            if(!$category) {
                abort(404);
            }
            $destinations = Destination::orderBy('title', 'desc')
                ->where('category_id', $category->id)       
                ->paginate(6);

        } else {
            $destinations = Destination::orderBy('title', 'desc')->paginate(6);
        }



        return view('livewire.show-destination', [
            'destinations' => $destinations,
            'categories' => $categories
        ]);
    }
}
