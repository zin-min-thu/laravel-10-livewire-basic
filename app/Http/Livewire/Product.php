<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    public $title;
    public $name;
    public $infos = [];

    public function mount()
    {
        $this->infos[] = 'Application is mounting....';
    }

    public function hydrate()
    {
        $this->infos[] = 'Application is hydrating....';
    }

    public function updating($name, $value)
    {
        $this->infos[] = 'Application is updating....';
    }

    public function updated($name, $value)
    {
        $this->infos[] = 'Application is updated....';
    }

    public function updatingName($value)
    {
        // dd($this->name, 'updating'); // still updating property name before get value
        $this->infos[] = 'Application is updating name property....';
    }

    public function updatedName($value)
    {
        // dd($this->name, 'updated'); // updated property name after get value
        $this->infos[] = 'Application is updated name property....';
    }

    public function render()
    {
        return view('livewire.product');
    }
}
