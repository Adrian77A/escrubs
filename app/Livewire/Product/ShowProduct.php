<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ShowProduct extends Component
{
    public $item_data = null;
    public $images; 
    public $show = false;
    public $post;

    public $product;
    public $selectedProduct;

    public function mount($product)
    {
        $this->post = $product;
    }
    
    public function render()
    {
        return view('livewire.product.show-product', ['product' => $this->post]);
    }
}
