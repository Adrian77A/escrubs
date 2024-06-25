<?php

namespace App\Livewire\Product;

use App\Models\Product as ModelsProduct;
use Livewire\Component;

class Product extends Component
{

    // public $data;
    // public function mount(){
    //     $this->data = ModelsProduct::Status()->select('id','category_id','name','price','stock','img','description','sku','color')->with('category')->get();
    // }
    // public function render()
    // {
    //     return view('livewire.product.product');
    // }

    public $data;
    public $record;
    public $images_data = [];
    public $updateMode = false;
    public $selectedProduct;
    // protected $listeners = ['show' => 'show'];


    public function mount()
    {
        $this->data = ModelsProduct::Status()->select('id','category_id','name','price','stock','img','description','sku','color')->with('category')->get();
    }

    public function render()
    {
        return view('livewire.product.product', [
            'data' => $this->data,
            'images_data' => $this->images_data,
            'updateMode' => $this->updateMode,
        ]);
    }

    public function show($id)
    {
        
        $this->record = ModelsProduct::findOrFail($id);
        $this->images_data = is_string($this->record->img) ? json_decode($this->record->img, true) : $this->record->img;
        $this->updateMode = true;
       
    }

    public function hideModal()
    {
        $this->updateMode = false;
        $this->selectedProduct = null;
    }



}
