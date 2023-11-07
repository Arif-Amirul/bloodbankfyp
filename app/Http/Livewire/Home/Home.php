<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\User;
use App\Models\DonorInformation;

class Home extends Component
{
    public $data;
    public $bloodAcount;
    public function render()
    {    
        $Donor = DonorInformation::where('blood_group','A+')->get();
       
        $this->bloodAcount=$Donor->count();
        return view('livewire.home.home')->extends('layouts.main');
    }
}
