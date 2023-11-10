<?php

namespace App\Http\Livewire\Patient;
use App\Models\PatientCollection;
use Livewire\Component;
use WireUi\Traits\Actions;

class PatientPage extends Component
{
    use Actions;
    public $patient_id;
    public $patient_full_name;
    public $date;
    public $phone_number;
    public $gender;
    public $required_blood_group;
    public $hospital_address;
    public $hospital_name;
    public $hospital_contact;


    public function create() {

        $this->validate([
            'patient_id'  => 'required',
            'patient_full_name' => 'required',
            'phone_number' => 'required',
            'date' => 'required',
            'gender' => 'required',
            'required_blood_group' => 'required',
            'hospital_address' => 'required',
            'hospital_name' => 'required',
            'hospital_contact' => 'required',

        ]);

        PatientCollection::create([
            'user_id' => auth()->user()->id,
            'patient_id' => $this->patient_id,
            'patient_full_name' => $this->patient_full_name,
            'date' => $this->date,
            'phone_number' => $this->phone_number,
            'gender' => $this->gender,
            'required_blood_group' => $this->required_blood_group,
            'hospital_address' => $this->hospital_address,
            'hospital_name' => $this->hospital_name,
            'hospital_contact' => $this->hospital_contact,

        ]);


        $this->dialog()->success(
            $title = 'Successfully',
            $description = 'Patient added succesfully.'
        );

        $this->patient_id = '';
        $this->patient_full_name = '';
        $this->date= '';
        $this->phone_number = '';
        $this->gender = '';
        $this->required_blood_group = '';
        $this->hospital_address = '';
        $this->hospital_name = '';
        $this->hospital_contact = '';

    }

    public function render()
    {
        return view('livewire.patient.patient-page')->extends('layouts.main');
    }
}
