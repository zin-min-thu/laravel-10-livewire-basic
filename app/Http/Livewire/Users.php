<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;

    public function render()
    {
        $users = User::select('*')->paginate(10);

        return view('livewire.users', [
            'users' => $users
        ]);
    }
}
