<?php

namespace App\Http\Livewire\Comun;

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
        return view('livewire.comun.footer');
    }

    public function submit(){
        Newsletter::create([
            'email' => $this->email,
        ]);

    }
}
