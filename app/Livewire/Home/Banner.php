<?php

namespace App\Livewire\Home;

use App\Models\Banner as ModelsBanner;
use Livewire\Component;

class Banner extends Component
{
    public $get_banners;
    public function mount(){
        $this->get_banners = ModelsBanner::status()->select('title', 'description', 'img', 'order')->get();
    }
    public function render()
    {
        return view('livewire.home.banner');
    }
}
