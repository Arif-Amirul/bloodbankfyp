<?php

namespace App\Http\Livewire\Patient;

use Livewire\Component;

class PatientPage extends Component
{
    public function render()
    {
        return view('livewire.patient.patient-page')->extends('layouts.main');
    }
}
