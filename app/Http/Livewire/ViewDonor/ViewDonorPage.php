<?php

namespace App\Http\Livewire\ViewDonor;

use Livewire\Component;
use App\Models\DonorInformation;
use App\Models\BloodStock;
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
            'title'       => 'Data Updated!',
            'description' => 'Data was successfully updated',
            'icon'        => 'success'
        ]);
    }

    public function delete($id){

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

        $bloodStock = BloodStock::where('blood_type' ,$this->blood_group )->first();

        $updateBloodStock = BloodStock::where('blood_type' ,$this->blood_group )
                      ->update(['quantity' => $bloodStock->quantity -1]);

        $this->dialog([
            'title'       => 'Data Deleted!',
            'description' => 'Data was successfully deletec',
            'icon'        => 'success'
        ]);
    }



    // public $updateModalTest = false;
    // public $viewModalTest = false;

    // public function openModalBloodTest()
    // {
    //     $this->updateModalTest = true;
    // }

    // public function viewModalBloodTest()
    // {

    //     $this->viewModalTest = true;
    // }


    public function render()
    {
        $Donor = DonorInformation::all();

        return view('livewire.view-donor.view-donor-page', [
            'data' =>    $Donor,

        ])->extends('layouts.main');
    }
}
