<?php

namespace App\Http\Livewire\BloodTransfer;
use App\Models\BloodInformation;
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

    // Method to handle patient ID selection change
    public function updatedPatientId($value)
    {
        // Fetch the required blood group based on the selected patient ID
        $patient = PatientCollection::where('patient_id', $value)->first();
        if ($patient) {
            $this->required_blood_group = $patient->required_blood_group;
        }
    }

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
        $patientOptions = PatientCollection::select('patient_id', 'patient_full_name')
            ->distinct()
            ->get()
            ->pluck('patient_full_name', 'patient_id'); // Fetch unique patient IDs with full names

         // Fetch blood_id and blood_status from tables using join
            $bloodData = Donate::join('blood_information', 'donate.blood_id', '=', 'blood_information.blood_id')
            ->select('donate.blood_id', 'blood_information.blood_status')
            ->distinct()
            ->get();

        // Prepare an associative array of bloodid => bloodstatus
        $bloodIds = [];
        foreach ($bloodData as $data) {
            $bloodIds[$data->blood_id] = $data->blood_status;
        }

        return view('livewire.blood-transfer.blood-transfer-page', [
            'patientOptions' => $patientOptions,
            'bloodIds' => $bloodIds, // Pass the associative array containing bloodid => bloodstatus
        ])->extends('layouts.main');
    }
}
