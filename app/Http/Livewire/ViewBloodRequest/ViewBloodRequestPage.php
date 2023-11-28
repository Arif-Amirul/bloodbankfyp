<?php

namespace App\Http\Livewire\ViewBloodRequest;
use App\Models\BloodRequest;
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

    public function openModalUpdate($id){
        $this->updateModal = true;
        $this->transfer = BloodRequest::find($id);
        $this->transfer_id = $this->transfer->transfer_id;
        $this->transfer_date = $this->transfer->transfer_date;
        $this->location = $this->transfer->location;
        $this->required_blood_group = $this->transfer->required_blood_group;
    }

    // public function update($id){
    //     $this->transfer->update([
    //         'transfer_id' => $this->transfer_id,
    //         'transfer_date' => $this->transfer_date,
    //         'location' => $this->location,
    //         'required_blood_group' => $this->required_blood_group,
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

    // public function delete($id){
    //     $transfer = BloodRequest::find($id);
    //     $transfer->delete();
    //     $this->transfer_id = $this->transfer->transfer_id;
    //     $this->transfer_date = $this->transfer->transfer_date;
    //     $this->location = $this->transfer->location;
    //     $this->required_blood_group = $this->transfer->required_blood_group;

    //     $this->dialog([
    //         'title'       => 'Data Deleted!',
    //         'description' => 'Data was successfully deleted',
    //         'icon'        => 'success'
    //     ]);
    // }

    public function render()
    {
        $Transfer = BloodRequest::all();
        return view('livewire.view-blood-request.view-blood-request-page', [
            'datatransfer' =>    $Transfer,

        ])->extends('layouts.main');
    }
}
