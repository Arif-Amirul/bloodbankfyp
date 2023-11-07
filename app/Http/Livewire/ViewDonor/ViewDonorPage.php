<?php

namespace App\Http\Livewire\ViewDonor;

use Livewire\Component;
use App\Models\DonorInformation;
//use App\Models\BloodInformation;

class ViewDonorPage extends Component
{
    //DONOR UPDATE
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

    public function openModalUpdate($id){
        $this->updateModal = true;
        $donor = DonorInformation::find($id);
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

    public function update($id){
         // Find the donor by ID
         $donor = DonorInformation::find($id);

         // Delete the donor
         $donor->update();
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

    public function delete($id){
         // Find the donor by ID
        $donor = DonorInformation::find($id);

        // Delete the donor
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






    /*ADD BLOOD TEST
    public $updateModalTest = false;
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
    public $gamma_gt;*/

    /*public function openModalBloodTest($id){
        $this->updateModalTest = true;
        $test = BloodInformation::find($id);
        $this->blood_id = $test->blood_id;
        $this->white_blood_cells = $test->white_blood_cells;
        $this->neutrophils = $test->neutrophils;
        $this->red_blood_cells = $test->red_blood_cells;
        $this->haemoglobin = $test->haemoglobin;
        $this->hematrocrit = $test->hematocrit;
        $this->mcv = $test->mcv;
        $this->platelets = $test->platelets;
        $this->cd4_cd8 = $test->cd4_cd8;
        $this->hiv_test = $test->hiv_test;
        $this->glicaemia = $test->glicaemia;
        $this->transferrin = $test->transferrin;
        $this->ferritim = $test->ferritin;
        $this->sodium = $test->sodium;
        $this->potassium = $test->potassium;
        $this->calcium = $test->calcium;
        $this->plasma_proteins = $test->plasma_proteins;
        $this->albumin = $test->albumin;
        $this->prealbumin = $test->prealbumin;
        $this->gamma_globulins = $test->gamma_globulins;
        $this->alt = $test->alt;
        $this->gamma_gt = $test->gamma_gt;

    }*/

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

  

    public function render()
    {
        $Donor = DonorInformation::all();
        
        return view('livewire.view-donor.view-donor-page', [
            'data' =>    $Donor , 
        ])->extends('layouts.main');

        
    }
}
