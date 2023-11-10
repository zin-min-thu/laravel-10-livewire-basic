<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Action extends Component
{
    public $sum, $message;

    public $num1, $num2;

    public function addTwoNumber($num1, $num2)
    {
        $this->sum = $num1 + $num2;
    }

    public function displayMessage($message)
    {
        $this->message = $message;
    }

    public function sum()
    {
        $this->sum = $this->num1 + $this->num2;
    }

    public function render()
    {
        return view('livewire.action');
    }
}
