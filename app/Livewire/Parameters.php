<?php

namespace App\Livewire;

use Livewire\Component;

class Parameters extends Component
{
    public string $name = "njir";

    public function render()
    {
        return view('livewire.parameters', ["name" => $this->name]);
    }
}
