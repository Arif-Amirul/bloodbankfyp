<?php

namespace App\Http\Livewire\BloodTransfer;
use App\Models\BloodStock;
use App\Models\BloodRequest;
use App\Models\Donate;
use App\Models\PatientCollection;
use Livewire\Component;
use WireUi\Traits\Actions;

class BloodTransferPage extends Component
{
    use Actions;
    public $transfer_id;
    public $transfer_date;
    public $location;
    public $required_blood_group;
    public $patient_id;
    public $blood_id;
    public $blood_group;

    public function transfer() {

        $this->validate([
            'transfer_id' => 'required',
            'transfer_date' => 'required',
            'location' => 'required',
            'required_blood_group' => 'required',
            'patient_id' => 'required',
            'blood_id'=> 'required',

        ]);

        BloodRequest::create([
            'user_id' => auth()->user()->id,
            'transfer_id'=> $this->transfer_id,
            'transfer_date'=> $this->transfer_date,
            'location'=> $this->location,
            'required_blood_group'=> $this->required_blood_group,
            'patient_id'=> $this->patient_id,
            'blood_id'=> $this->blood_id,
        ]);

        $bloodStock = BloodStock::where('blood_type' ,$this->required_blood_group )->first();

        $updateBloodStock = BloodStock::where('blood_type' ,$this->required_blood_group )
                ->update(['quantity' => $bloodStock->quantity - 1]);

        $this->dialog()->success(
            $title = 'Successfully',
            $description = 'Blood request succesfully.'
        );

    }

    public function render()
    {
        $patientIds = PatientCollection::pluck('patient_id', 'patient_id')->unique();
        $bloodIds = Donate::pluck('blood_id', 'blood_id')->unique();
        return view('livewire.blood-transfer.blood-transfer-page', [
            'patientIds' => $patientIds,
            'bloodIds' => $bloodIds,
        ])->extends('layouts.main');
    }
}
