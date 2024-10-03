<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Features\SupportPageComponents\BaseTitle;

class Clicker extends Component
{

    public string $name;
    public string $email;
    public string $password;

    public function createNewUser()
    {
        User::query()
        ->create([
            "name" => "Bal Iqbal ajarin dong bal",
            "email" => "iqbal@gmail.com",
            "password" => "rahasia",
        ]);
    }

    public function render()
    {

        $users = User::all();

        return view('livewire.clicker', [
        
        ]);
    }
}
