<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterComponent extends Component
{

    public $name, $email, $password;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string'
    ];


    public function register()
    {
        $this->validate();
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role_id' => 1,
        ]);
        Auth::login($user);
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.register-component');
    }
}
