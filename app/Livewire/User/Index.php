<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use App\Models\User;


#[Title('User')]
class Index extends Component
{
    public \App\Livewire\Forms\UserForm $userform;
    #[\Livewire\Attributes\On('userSave')]
    public function updateList($user) {

    }
    public function render()
    {
        return view('livewire.user.index', [
            'users' => User::query()->latest()->paginate(10),
        ]);
    }
    public function delete($id) {
        $this->userform->destroy($id);
    }
}
