<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\Attributes\Lazy;

class PenggunaTableRow extends Component
{
    public $iteration;
    public $item;

    #[Lazy]
    public function render()
    {
        return view('livewire.admin.components.pengguna-table-row');
    }
}
