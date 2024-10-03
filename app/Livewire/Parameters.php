<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;

class Parameters extends Component
{

    // #[On('user-created')]

    // public function updated($user = null)
    // {
    //     dd($user);
    // }

    public function render($user = null)
    {
        $users = User::query()->paginate(3);

        return view('livewire.parameters', ["users" => $users]);
    }
}
