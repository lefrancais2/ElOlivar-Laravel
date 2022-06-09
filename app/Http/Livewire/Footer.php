<?php

namespace App\Http\Livewire;

use App\Models\Newsletter;
use Livewire\Component;

class Footer extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email'
    ];

    protected $messages = [
        'email.required' => 'El campo de email no puede estar vacío.',
        'email.email' => 'El formato de dirección de email no es válido.',
    ];

    public function render()
    {
        return view('livewire.footer');
    }

    public function submit(){
        Newsletter::create([
            'email' => $this->email,
        ]);

    }
}
