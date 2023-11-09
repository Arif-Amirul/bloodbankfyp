<?php

namespace App\Http\Livewire\ViewPatient;
use App\Models\PatientCollection;
use Livewire\Component;

class ViewPatientPage extends Component
{
    
    public function render()
    {
        return view('livewire.view-patient.view-patient-page')->extends('layouts.main');
    }
}
