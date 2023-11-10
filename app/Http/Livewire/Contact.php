<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $name, $email, $phone, $message;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required|min:5',
        ]);
    }

    public function submitForm()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required|min:5',
        ]);

        dd($this->name, $this->email, $this->phone, $this->message, 'completed');
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
