<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserForm extends Form
{
    #[Rule(['required','unique:users,username'])]
    public string $username = '';
    #[Rule(['required','email','unique:users,email'])]
    public string $email = '';
    #[Rule(['required','min:6','same:confirm_password'])]
    public string $password = '';
    #[Rule(['required','min:6'])]
    public string $confirm_password = '';
    #[Rule(['required'])]
    public string $level = '';
    public function store() {
        $this->validate();
        $user = User::create([
            'username' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'level' => $this->level,
        ]);
        $this->reset();
        return $user;
        }
    public function destroy($id){
        // dd($id);
        $user = User::find($id);
        $user->delete();

        return $user;


    }
}
