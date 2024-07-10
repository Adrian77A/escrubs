<?php

namespace App\Livewire;

use App\Models\Comment as ModelsComment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
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
            'description' => 'required|min:5',
            'email' => 'required|email:rfc,dns'
        ], $this->messages());
    
        ModelsComment::create([
            'name' => $this->name,
            'email' => $this->email,
            'status' => '0',
            'description' => $this->description,
            'date' => $this->date,
        ]);

        return redirect()->route('thank_page');

    }

    protected function messages()
    {
        return [
            'name.required' => __('validation.required', ['attribute' => 'nombre']),
            'name.min' => __('validation.min.string', ['attribute' => 'nombre', 'min' => 5]),
            'email.required' => __('validation.required', ['attribute' => 'correo electrónico']),
            'email.email' => __('validation.email', ['attribute' => 'correo electrónico']),
        ];
    }

    private function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->description = null;
    }
}
