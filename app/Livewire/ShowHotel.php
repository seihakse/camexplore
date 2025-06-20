<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Hotel;
use App\Models\Category;
use App\Livewire\Url;

class ShowHotel extends Component
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
            $hotels = Hotel::orderBy('title', 'desc')
                ->where('category_id', $category->id)       
                ->paginate(6);

        } else {
            $hotels = Hotel::orderBy('title', 'desc')->paginate(6);
        }



        return view('livewire.show-hotel', [
            'hotels' => $hotels,
            'categories' => $categories
        ]);
    }
}
