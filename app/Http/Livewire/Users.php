<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    public $users;

    public function render()
    {
        $this->users = User::select('*')->get();

        return view('livewire.users');
    }
}
