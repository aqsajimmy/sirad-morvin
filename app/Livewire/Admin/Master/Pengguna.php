<?php

namespace App\Livewire\Admin\Master;

use Livewire\Component;
use Livewire\Attributes\Title;

class Pengguna extends Component
{
    #[Title('Data Pengguna')]
    public function render()
    {
        return view('livewire.admin.master.pengguna')->layout('layouts.admin-layout');
    }
}
