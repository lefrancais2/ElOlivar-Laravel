<?php

namespace App\Http\Livewire;

use App\Models\ContactUs;
use Livewire\Component;

class FormContact extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;

    public $success_message;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'message' => 'required|min:20',
    ];

    protected $messages = [
        'email.required' => 'El campo de direccion de email no puede estar vacío.',
        'email.email' => 'El formato de dirección de email no es válido.',

        'name.required' => 'El campo nombre no puede estar vacío.',

        'phone.required' => 'El campo teléfono no puede estar vacío',
        'phone.numeric' => 'El formato de teléfono no es válido',

        'message.required' => 'Debe de existir un mensaje.',
        'message.min' => 'Debe de existir al menos 20 caracteres.',
    ];

    protected $validationAttributes = [
        'email' => 'email address'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.form-contact');
    }

    public function submit(){
        
        $this->validate();

        ContactUs::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
        ]);

        $this->resetForm();

        sleep(1);

        $this->success_message = 'Hemos recibido tu mensaje satisfactoriamente!!';

        //return back()->with('message_information','Hemos recibido tu mensaje satisfactoriamente!!');
    }

    public function resetForm(){
        $this->name = '';
        $this->email =  '';
        $this->phone =  '';
        $this->message = '';
    }
}
