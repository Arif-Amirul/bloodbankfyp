<?php

namespace App\Http\Livewire\RegisterUser;

use Livewire\Component;

class RegisterUserPage extends Component
{
    public function render()
    {
        return view('livewire.register-user.register-user-page')->extends('layouts.main');
    }
}
