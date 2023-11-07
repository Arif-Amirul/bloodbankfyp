<?php

namespace App\Http\Livewire\BloodTransfer;

use Livewire\Component;

class BloodTransferPage extends Component
{
    public function render()
    {
        return view('livewire.blood-transfer.blood-transfer-page')->extends('layouts.main');
    }
}
