<?php

namespace App\Http\Livewire\ViewPatient;
use App\Models\PatientCollection;
use Livewire\Component;
use WireUi\Traits\Actions;

class ViewPatientPage extends Component
{
    use Actions;
    public $updateModal = false;
    public $patient_id;
    public $patient_full_name;
    public $date;
    public $phone_number;
    public $gender;
    public $required_blood_group;
    public $hospital_address;
    public $hospital_name;
    public $hospital_contact;
    public $patient;

    public function openModalUpdate($id){
        $this->updateModal = true;
        $this->patient = PatientCollection::find($id);
        $this->patient_id =   $this->patient->patient_id;
        $this->patient_full_name=   $this->patient->patient_full_name;
        $this->date =  $this->patient->date;
        $this->phone_number =   $this->patient->phone_number;
        $this->gender =   $this->patient->gender;
        $this->required_blood_group =  $this->patient->required_blood_group;
        $this->hospital_address =   $this->patient->hospital_address;
        $this->hospital_name =  $this->patient->hospital_name;
        $this->hospital_contact =  $this->patient->hospital_contact;
    }

    public function update($id){
        $this->patient->update([
            'patient_id' => $this->patient_id,
            'patient_full_name'=> $this->patient_full_name,
            'date' => $this->date,
            'phone_number' => $this->phone_number,
            'gender' => $this->gender,
            'required_blood_group' => $this->required_blood_group,
            'hospital_address'=> $this->hospital_address,
            'hospital_name' => $this->hospital_name,
            'hospital_contact' => $this->hospital_contact,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $this->updateModal = false;

        $this->dialog([
            'title'       => 'Data Updated!',
            'description' => 'Data was successfully updated',
            'icon'        => 'success'
        ]);
    }

    public function delete($id){

        $patient = PatientCollection::find($id);
        $patient->delete();
        $this->patient_id = $patient->patient_id;
        $this->patient_full_name = $patient->patient_full_name;
        $this->date = $patient->date;
        $this->phone_number = $patient->phone_number;
        $this->required_blood_group = $patient->required_blood_group;
        $this->hospital_address = $patient->hospital_address;
        $this->hospital_name = $patient->hospital_name;
        $this->hospital_contact = $patient->hospital_contact;

        $this->dialog([
            'title'       => 'Data Deleted!',
            'description' => 'Data was successfully deletec',
            'icon'        => 'success'
        ]);
    }

    public function render()
    {
        $Patient = PatientCollection::all();

        return view('livewire.view-patient.view-patient-page', [
            'dataPatient' =>    $Patient,

        ])->extends('layouts.main');

    }
}
