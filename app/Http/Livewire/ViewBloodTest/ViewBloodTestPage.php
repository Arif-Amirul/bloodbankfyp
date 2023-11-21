<?php

namespace App\Http\Livewire\ViewBloodTest;
use Livewire\Component;
use App\Models\BloodInformation;
use WireUi\Traits\Actions;

class ViewBloodTestPage extends Component
{
    use Actions;
    public $updateModal = false;
    public $donor_id;
    public $blood_id;
    public $date;
    public $white_blood_cells;
    public $neutrophils;
    public $red_blood_cells;
    public $haemoglobin;
    public $hematrocrit;
    public $mcv;
    public $platelets;
    public $cd4_cd8;
    public $hiv_test;
    public $glicaemia;
    public $transferrin;
    public $ferritim;
    public $sodium;
    public $potassium;
    public $calcium;
    public $plasma_proteins;
    public $albumin;
    public $prealbumin;
    public $gamma_globulins;
    public $alt;
    public $gamma_gt;
    public $BloodTest;

    // public function openModalUpdate($id){
    //     $this->updateModal = true;
    //     $this->patient = PatientCollection::find($id);
    //     $this->patient_id =   $this->patient->patient_id;
    //     $this->patient_full_name=   $this->patient->patient_full_name;
    //     $this->date =  $this->patient->date;
    //     $this->phone_number =   $this->patient->phone_number;
    //     $this->gender =   $this->patient->gender;
    //     $this->required_blood_group =  $this->patient->required_blood_group;
    //     $this->hospital_address =   $this->patient->hospital_address;
    //     $this->hospital_name =  $this->patient->hospital_name;
    //     $this->hospital_contact =  $this->patient->hospital_contact;
    // }

    // public function update($id){
    //     $this->patient->update([
    //         'patient_id' => $this->patient_id,
    //         'patient_full_name'=> $this->patient_full_name,
    //         'date' => $this->date,
    //         'phone_number' => $this->phone_number,
    //         'gender' => $this->gender,
    //         'required_blood_group' => $this->required_blood_group,
    //         'hospital_address'=> $this->hospital_address,
    //         'hospital_name' => $this->hospital_name,
    //         'hospital_contact' => $this->hospital_contact,
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);
    //     $this->updateModal = false;

    //     $this->dialog([
    //         'title'       => 'Data Updated!',
    //         'description' => 'Data was successfully updated',
    //         'icon'        => 'success'
    //     ]);
    // }

    public function delete($id){

        $BloodTest = BloodInformation::find($id);
        $BloodTest->delete();
        $this->donor_id = $BloodTest->donor_id;
        $this->blood_id = $BloodTest->blood_id;
        $this->date = $BloodTest->date;
        $this->white_blood_cells = $BloodTest->white_blood_cells;
        $this->neutrophils = $BloodTest->neutrophils;
        $this->red_blood_cells = $BloodTest->red_blood_cells;
        $this->haemoglobin = $BloodTest->haemoglobin;
        $this->hematrocrit = $BloodTest->hematrocrit;
        $this->mcv = $BloodTest->mcv;
        $this->platelets = $BloodTest->platelets;
        $this->cd4_cd8 = $BloodTest->cd4_cd8;
        $this->hiv_test = $BloodTest->hiv_test;
        $this->glicaemia = $BloodTest->glicaemia;
        $this->transferrin = $BloodTest->transferrin;
        $this->ferritim = $BloodTest->ferritim;
        $this->sodium = $BloodTest->sodium;
        $this->potassium = $BloodTest->potassium;
        $this->calcium = $BloodTest->calcium;
        $this->plasma_proteins = $BloodTest->plasma_proteins;
        $this->albumin = $BloodTest->albumin;
        $this->prealbumin = $BloodTest->prealbumin;
        $this->gamma_globulins = $BloodTest->gamma_globulins;
        $this->alt = $BloodTest->alt;
        $this->gamma_gt = $BloodTest->gamma_gt;

        $this->dialog([
            'title'       => 'Data Deleted!',
            'description' => 'Data was successfully deleted',
            'icon'        => 'success'
        ]);
    }

    public function render()
    {
        $BloodTest = BloodInformation::all();

        return view('livewire.view-blood-test.view-blood-test-page', [
            'blooddata' =>  $BloodTest,
        ])->extends('layouts.main');
    }
}
