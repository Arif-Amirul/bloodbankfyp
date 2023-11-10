<?php

namespace App\Http\Livewire\ViewDonor;

use Livewire\Component;
use App\Models\DonorInformation;
use App\Models\BloodInformation;
use WireUi\Traits\Actions;

class ViewDonorPage extends Component
{
    use Actions;
    public $updateModal = false;
    public $donor_id;
    public $blood_group;
    public $full_name;
    public $phone_number;
    public $marital_status;
    public $date;
    public $gender;
    public $race;
    public $street_address;
    public $city;
    public $state;
    public $postal_code;
    public $donation_date;
    public $donor;

    public function openModalUpdate($id){
        $this->updateModal = true;
        $this->donor = DonorInformation::find($id);
        $this->donor_id =   $this->donor->donor_id;
        $this->blood_group =   $this->donor->blood_group;
        $this->full_name =  $this->donor->full_name;
        $this->phone_number =   $this->donor->phone_number;
        $this->marital_status =  $this->donor->marital_status;
        $this->date =  $this->donor->date;
        $this->gender =   $this->donor->gender;
        $this->race =  $this->donor->race;
        $this->street_address =  $this->donor->street_address;
        $this->city =   $this->donor->city;
        $this->state =   $this->donor->state;
        $this->postal_code =   $this->donor->postal_code;
        $this->donation_date=   $this->donor->donation_date;

    }

    public function update($id){
        //  $donor = DonorInformation::find($id);
        $this->donor->update([
            'donor_id' => $this->donor_id,
            'blood_group' => $this->blood_group,
            'full_name' => $this->full_name,
            'phone_number' => $this->phone_number,
            'marital_status' => $this->marital_status,
            'date' => $this->date,
            'gender' => $this->gender,
            'race' => $this->race,
            'street_address' => $this->street_address,
            'city' => $this->city,
            'state' => $this->state,
            'postal_code' => $this->postal_code,
            'donation_date' => $this->donation_date,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $this->updateModal = false;

        $this->dialog([
            'title'       => 'Profile saved!',
            'description' => 'Your profile was successfully saved',
            'icon'        => 'success'
        ]);
    }

    public function delete($id){
        dd($id);
        $donor = DonorInformation::find($id);
        $donor->delete();
        $this->donor_id = $donor->donor_id;
        $this->blood_group = $donor->blood_group;
        $this->full_name = $donor->full_name;
        $this->phone_number = $donor->phone_number;
        $this->marital_status = $donor->marital_status;
        $this->date = $donor->date;
        $this->gender = $donor->gender;
        $this->race = $donor->race;
        $this->street_address = $donor->street_address;
        $this->city = $donor->city;
        $this->state = $donor->state;
        $this->postal_code = $donor->postal_code;
        $this->donation_date= $donor->donation_date;
    }

    //ADD BLOOD TEST
    public $blood_id;
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

    public $updateModalTest = false;
    public $viewModalTest = false;

    public function openModalBloodTest()
    {
        $this->updateModalTest = true;
    }

    public function viewModalBloodTest()
    {

        $this->viewModalTest = true;
    }

    public function create() {

        $this->validate([
            'blood_id' => 'required',
            'date' => 'required',
            'white_blood_cells' => 'required',
            'neutrophils' => 'required',
            'red_blood_cells'=> 'required',
            'haemoglobin' => 'required',
            'hematrocrit' => 'required',
            'mcv' => 'required',
            'platelets' => 'required',
            'cd4_cd8' => 'required',
            'hiv_test' => 'required',
            'glicaemia' => 'required',
            'transferrin' => 'required',
            'ferritim' => 'required',
            'sodium'=> 'required',
            'potassium'=> 'required',
            'calcium'=> 'required',
            'plasma_proteins' => 'required',
            'albumin' => 'required',
            'prealbumin' => 'required',
            'gamma_globulins' => 'required',
            'alt' => 'required',
            'gamma_gt' => 'required',
        ]);

        BloodInformation::create([
            'user_id' => auth()->user()->id,
            'blood_id'=> $this->blood_id,
            'date'=> $this->date,
            'white_blood_cells'=> $this->white_blood_cells,
            'neutrophils'=> $this->neutrophils,
            'red_blood_cells'=> $this->red_blood_cells,
            'haemoglobin'=> $this->haemoglobin,
            'hematrocrit'=> $this->hematrocrit,
            'mcv'=> $this->mcv,
            'platelets'=> $this->platelets,
            'cd4_cd8'=> $this->cd4_cd8,
            'hiv_test'=> $this->hiv_test,
            'glicaemia'=> $this->glicaemia,
            'transferrin'=> $this->transferrin,
            'ferritim'=> $this->ferritim,
            'sodium'=> $this->sodium,
            'potassium'=> $this->potassium,
            'calcium'=> $this->calcium,
            'plasma_proteins'=> $this->plasma_proteins,
            'albumin'=> $this->albumin,
            'prealbumin'=> $this->prealbumin,
            'gamma_globulins'=> $this->gamma_globulins,
            'alt'=> $this->alt,
            'gamma_gt'=> $this->gamma_gt,
        ]);

        $this->reset([
            'blood_id',
            'date',
            'white_blood_cells',
            'neutrophils',
            'red_blood_cells',
            'haemoglobin',
            'hematrocrit',
            'mcv',
            'platelets',
            'cd4_cd8',
            'hiv_test',
            'glicaemia',
            'transferrin',
            'ferritim',
            'sodium',
            'potassium',
            'calcium',
            'plasma_proteins',
            'albumin',
            'prealbumin',
            'gamma_globulins',
            'alt',
            'gamma_gt',
        ]);

    }


    public function render()
    {
        $Donor = DonorInformation::all();
        $BloodTest = BloodInformation::all();

        return view('livewire.view-donor.view-donor-page', [
            'data' =>    $Donor,
            'blooddata' =>  $BloodTest,
        ])->extends('layouts.main');


    }
}
