<?php

namespace App\Http\Livewire\RegisterUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use WireUi\Traits\Actions;
use Livewire\Component;

class RegisterUserPage extends Component
{
    use Actions;
     /** @var string */
     public $name = '';

     /** @var string */
     public $email = '';
 
     /** @var string */
     public $password = '';
 
     /** @var string */
     public $passwordConfirmation = '';
 
     public function register()
     {
         $this->validate([
             'name' => ['required'],
             'email' => ['required', 'email', 'unique:users'],
             'password' => ['required', 'min:8', 'same:passwordConfirmation'],
         ]);
 
         $user = User::create([
             'email' => $this->email,
             'name' => $this->name,
             'password' => Hash::make($this->password),
             'role' => '2',
         ]);
 
         event(new Registered($user));
 
         Auth::login($user, true);
 
         $this->dialog([
            'title'       => 'Profile saved!',
            'description' => 'Your profile was successfully saved',
            'icon'        => 'success'
        ]);
     }

    public function render()
    {
        return view('livewire.register-user.register-user-page')->extends('layouts.main');
    }
}
