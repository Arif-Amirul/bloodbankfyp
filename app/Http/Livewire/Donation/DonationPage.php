<?php

namespace App\Http\Livewire\Donation;
use App\Models\Donate;
use Livewire\Component;
use App\Models\DonorInformation;
use WireUi\Traits\Actions;

class DonationPage extends Component
{
    use Actions;
    public $donation_id;
    public $donor_id;
    public $blood_id;
    public $donation_date;

    // Fetch donor information to populate the dropdown
    public function mount()
    {
        $this->donorOptions = DonorInformation::pluck('donor_id', 'id');
    }

    public function create() {

        $this->validate([
            'donation_id' => 'required',
            'donor_id' => 'required',
            'blood_id'  => 'required',
            'donation_date'  => 'required',
        ]);

        Donate::create([
            'user_id' => auth()->user()->id,
            'donation_id' => $this->donation_id,
            'donor_id' => $this->donor_id,
            'blood_id' => $this->blood_id,
            'donation_date' => $this->donation_date,
        ]);


    $this->dialog()->success(
        $title = 'Successfully',
        $description = 'Donate added succesfully.'
    );

}
    public function render()
    {
       // Pass donor options to the view
        return view('livewire.donation.donation-page', [
            'donorOptions' => $this->donorOptions,
        ])->extends('layouts.main');
    }
}
