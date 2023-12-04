<?php

namespace App\Http\Livewire\ViewBloodRequest;
use App\Models\BloodRequest;
use App\Models\PatientCollection;
use WireUi\Traits\Actions;
use Livewire\Component;

class ViewBloodRequestPage extends Component
{
    use Actions;
    public $updateModal = false;
    public $viewMoreModal = false;
    public $transfer_id;
    public $transfer_date;
    public $location;
    public $required_blood_group;
    public $patient_id;
    public $blood_id;
    public $transfer;

    public $details = false;
    public $detailTransfer;
    public $patient_full_name;
    public $date;
    public $phone_number;
    public $gender;
    public $contact;

    public function openModalDetail($id){
        $this->details = true;
        $this->detailTransfer = PatientCollection::find($id);
        // Fetching specific attributes from the PatientCollection model
        $this->patient_id = $this->detailTransfer->patient_id;
        $this->patient_full_name = $this->detailTransfer->patient_full_name;
        $this->required_blood_group = $this->detailTransfer->required_blood_group;
        $this->date = $this->detailTransfer->date;
        $this->phone_number = $this->detailTransfer->phone_number;
        $this->gender = $this->detailTransfer->gender;
        $this->location = $this->detailTransfer->location;
        $this->contact = $this->detailTransfer->contact;
        $this->transfer_date = $this->detailTransfer->transfer_date;

    }

    public function openModalUpdate($id){
        $this->updateModal = true;
        $this->transfer = BloodRequest::find($id);
        $this->transfer_id = $this->transfer->transfer_id;
        $this->transfer_date = $this->transfer->transfer_date;
        $this->location = $this->transfer->location;
        $this->required_blood_group = $this->transfer->required_blood_group;
    }

    public function delete($id){
        $transfer = BloodRequest::find($id);
        $transfer->delete();
        $this->transfer_id = $this->transfer->transfer_id;
        $this->transfer_date = $this->transfer->transfer_date;
        $this->location = $this->transfer->location;
        $this->required_blood_group = $this->transfer->required_blood_group;

        $this->dialog([
            'title'       => 'Data Deleted!',
            'description' => 'Data was successfully deleted',
            'icon'        => 'success'
        ]);
    }

    public function render()
    {
        $Transfer = BloodRequest::all();

        return view('livewire.view-blood-request.view-blood-request-page', [
            'datatransfer' =>    $Transfer,

        ])->extends('layouts.main');
    }
}
