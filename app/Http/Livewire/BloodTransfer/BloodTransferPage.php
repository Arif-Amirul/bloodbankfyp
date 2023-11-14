<?php

namespace App\Http\Livewire\BloodTransfer;
use App\Models\BloodStock;
use App\Models\DonationBlood;
use App\Models\DonorInformation;
use App\Models\PatientCollection;
use Livewire\Component;
use WireUi\Traits\Actions;

class BloodTransferPage extends Component
{
    use Actions;
    public $blood_group;
    
    public function transfer() {

        // Get the blood information
        $donorInformation = DonorInformation::all();


        $bloodStock = BloodStock::where('blood_type' ,$this->blood_group )->first();

        $updateBloodStock = BloodStock::where('blood_type' ,$this->blood_group )
            ->update(['quantity' => $bloodStock->quantity - 1]);



        // Reset the form fields after transfer
        $this->reset(['donorId', 'transferredTo']);


        $this->dialog()->success(
            $title = 'Successfully',
            $description = 'Blood transfer succesfully.'
        );

    }

    public function render()
    {
        $donorIds = DonorInformation::pluck('donor_id', 'donor_id');
        $transferredToOptions = PatientCollection::pluck('patient_id', 'patient_id');

        return view('livewire.blood-transfer.blood-transfer-page', [
            'donorIds' => $donorIds,
            'transferredToOptions' => $transferredToOptions,
        ])->extends('layouts.main');
    }
}
