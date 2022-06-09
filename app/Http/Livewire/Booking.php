<?php

namespace App\Http\Livewire;

use App\Models\Booking as ModelsBooking;
use Livewire\Component;

class Booking extends Component
{
    public $name;
    public $lastname;
    public $phone;
    public $email;
    public $date;
    public $hour;
    public $num_persons;

    public $success_message;

    protected $rules = [
        'name' => 'required',
        'lastname' => 'required',
        'phone' => 'required|numeric',
        'email' => 'required|email',
        'date' => 'required',
        'hour' => 'required',
        'num_persons' => 'required|numeric',
    ];

    protected $messages = [
        'name.required' => 'El campo nombre no puede estar vacío',

        'lastname.required' => 'El campo apellidos no puede estar vacío',

        'phone.required' => 'El campo apellidos no puede estar vacío',
        'phone.numeric' => 'Solo se admiten números',

        'email.required' => 'El campo email no puede estar vacío',
        'email.email' => 'Debe de ser un formato de email válido',

        'date.required' => 'Se debe seleccionar una fecha.',

        'hour.required' => 'Se debe seleccionar una hora.',

        'num_persons.required' => 'Se debe seleccionar el número de personas'
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
        return view('livewire.booking');
    }

    public function submitForm()
    {
        $this->validate();

        ModelsBooking::create([
            'name' => $this->name,
            'lastname' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'date' => $this->date,
            'hour' => $this->hour,
            'num_persons' => $this->num_persons,
        ]);

        $this->resetForm();

        sleep(1);

        $this->success_message = 'Hemos recibido tu mensaje satisfactoriamente!!';
    }

    public function resetForm()
    {
        $this->name = '';
        $this->lastname = '';
        $this->phone = '';
        $this->email = '';
        $this->date = '';
        $this->hour = '';
        $this->num_persons = '';
    }
}
