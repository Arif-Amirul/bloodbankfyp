<?php

namespace App\Http\Livewire\ViewBloodTest;
use Livewire\Component;
use App\Models\BloodInformation;


class ViewBloodTestPage extends Component
{
    public function render()
    {
        $test = BloodInformation::all();

        return view('livewire.view-blood-test.view-blood-test-page', [
            'datablood' =>    $test ,
        ])->extends('layouts.main');
    }
}
