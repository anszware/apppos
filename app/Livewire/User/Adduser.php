<?php

namespace App\Livewire\User;

use Livewire\Component;

class Adduser extends Component
{

    public \App\Livewire\Forms\UserForm $userform;
    public function save(){

        try {
           $saveUser =  $this->userform->store();
           $this->dispatch('openAlert','success','Berhasil!','User berhasil ditambahkan !!');
            $this->dispatch('closeModal'); // Dispatch event untuk menutup modal
            $this->dispatch('userSave', user:$saveUser->id); // Dispatch event untuk menutup modal
        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->dispatch('validationFailed'); // Dispatch event jika validasi gagal
            throw $e;
        }
    }
    public function render()
    {
        return view('livewire.user.adduser');
    }
}
