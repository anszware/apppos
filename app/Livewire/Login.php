<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;

#[Layout('layouts.guest')]
#[Title('Login')]
class Login extends Component
{
    #[Rule('required','email')]
    public string $email ='';
    #[Rule('required')]
    public string $password = '';
    public function login(){
        if (Auth::attempt($this->validate())) {
            return redirect()->route('dashboard');
        }else{
            $this->dispatch('openAlert','error','Terjadi Kesalahan!','Email atau password salah !!');
        }
        throw ValidationException::withMessages([
            'email' => 'The Provider tidak kredensial',
        ]);
    }
    public function render()
    {
        return view('livewire.login');
    }
}
