<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Title;

class Dashboard extends Component
{
    #[Title('Dashboard')]
    public function render()
    {
        return view('livewire.admin.dashboard')->layout('layouts.admin-layout');
    }
}
