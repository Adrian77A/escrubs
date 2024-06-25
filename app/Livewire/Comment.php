<?php

namespace App\Livewire;

use App\Models\Comment as ModelsComment;
use Carbon\Carbon;
use Livewire\Component;

class Comment extends Component
{
    public $date, $name, $email, $description, $bandera;

    public function render()
    {
        return view('livewire.comment');
    }

    public function store()
    {
        $this->date = Carbon::now();
        $this->validate([
            'name' => 'required|min:5',
            'email' => 'required|email:rfc,dns'
        ]);

        ModelsComment::create([
            'name' => $this->name,
            'email' => $this->email,
            'status' => '0',
            'description' => $this->description,
            'date' => $this->date,
        ]);

        $this->bandera = true;
        
        $this->resetInput();

    }

    private function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->description = null;
    }
}
