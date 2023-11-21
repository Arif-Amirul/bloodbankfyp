<?php

namespace App\Http\Livewire\BloodTransfer;
use App\Models\BloodStock;
use App\Models\DonationBlood;
use App\Models\BloodInformation;
use App\Models\PatientCollection;
use Livewire\Component;
use WireUi\Traits\Actions;

class BloodTransferPage extends Component
{
    use Actions;
    public $blood_group;

    public function transfer() {

        // Get the blood information
        $donorInformation = BloodInformation::all();


        $bloodStock = BloodStock::where('blood_type' ,$this->blood_group )->first();

        $updateBloodStock = BloodStock::where('blood_type' ,$this->blood_group )
            ->update(['quantity' => $bloodStock->quantity - 1]);



        // Reset the form fields after transfer
        $this->reset(['bloodId', 'transferredTo']);


        $this->dialog()->success(
            $title = 'Successfully',
            $description = 'Blood transfer succesfully.'
        );

    }

    public function render()
    {
        $bloodIds = BloodInformation::pluck('blood_id', 'blood_id');
        $transferredToOptions = PatientCollection::pluck('patient_id', 'patient_id');

        return view('livewire.blood-transfer.blood-transfer-page', [
            'bloodIds' => $bloodIds,
            'transferredToOptions' => $transferredToOptions,
        ])->extends('layouts.main');
    }
}
