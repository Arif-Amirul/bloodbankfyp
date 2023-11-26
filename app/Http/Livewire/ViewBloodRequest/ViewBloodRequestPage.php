<?php

namespace App\Http\Livewire\ViewBloodRequest;

use Livewire\Component;

class ViewBloodRequestPage extends Component
{
    public function render()
    {
        return view('livewire.view-blood-request.view-blood-request-page')->extends('layouts.main');
    }
}
