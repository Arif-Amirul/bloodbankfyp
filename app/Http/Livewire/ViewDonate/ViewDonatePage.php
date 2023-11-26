<?php

namespace App\Http\Livewire\ViewDonate;

use Livewire\Component;
use App\Models\Donate;
use App\Models\BloodStock;
use WireUi\Traits\Actions;

class ViewDonatePage extends Component
{
    use Actions;
    public $donation_id;
    public $donor_id;
    public $blood_group;
    public $blood_id;
    public $donation_date;

    public function delete($id){

        $donation = Donate::find($id);
        $donation->delete();
        $this->donation_id = $donation->full_name;
        $this->donor_id = $donation->donor_id;
        $this->blood_group= $donation->blood_group;
        $this->blood_id = $donation->blood_id;
        $this->donation_date = $donation->donation_date;

        $this->dialog([
        'title'       => 'Data Deleted!',
        'description' => 'Data was successfully deletec',
        'icon'        => 'success'
    ]);
}
    public function render()
    {
        $donation = Donate::all();

        return view('livewire.view-donate.view-donate-page', [
            'datadonate' =>    $donation,

        ])->extends('layouts.main');
    }
}
