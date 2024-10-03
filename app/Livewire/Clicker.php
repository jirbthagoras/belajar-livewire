<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Features\SupportPageComponents\BaseTitle;
use Livewire\WithPagination;

class Clicker extends Component
{
    use WithPagination;

    public string $name;

    public string $email;

    public string $password;

    public function createNewUser()
    {
        $this->validate([
            "name" => ["required", "min:2", "max:50"],
            "email" => ["required", "email", "unique:users"],
            "password" => ["required", "min:5"],
        ]);

        User::query()
        ->create([
            "name" => $this->name,
            "email" => $this->email,
            "password" => $this->password,
        ]);



        request()->session()->flash("success", "Your Account Successfully Created");

        $user = User::query()
        ->where("name", "=", $this->name)
        ->first();

        $this->reset("name", "email", "password");

        $this->dispatch("user-created", $user);
    }

    public function render()
    {

        $users = User::query()->latest()->paginate(5);

        return view('livewire.clicker', [
            "users" => $users
        ]);
    }
}
