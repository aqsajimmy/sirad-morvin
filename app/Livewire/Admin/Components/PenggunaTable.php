<?php

namespace App\Livewire\Admin\Components;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class PenggunaTable extends Component
{
    use WithPagination;
    public function render()
    {
        $users = User::paginate('10');
        return view('livewire.admin.components.pengguna-table', [
            'users' => $users,
        ]);
    }
}
