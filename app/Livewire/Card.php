<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;

class Card extends Component
{

    public $data;

    public function render()
    {
        return view('livewire.card');
    }

    public function mount(){

      $this->data =  Comment::status()->select('name', 'description', 'date')->get();
    }
}
