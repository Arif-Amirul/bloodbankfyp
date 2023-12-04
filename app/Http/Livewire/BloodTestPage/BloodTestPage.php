<?php

namespace App\Http\Livewire\BloodTestPage;
use App\Models\BloodInformation;
use App\Models\BloodStock;
use App\Models\Donate;
use Livewire\Component;
use WireUi\Traits\Actions;

class BloodTestPage extends Component
{
    //ADD BLOOD TEST
    use Actions;
    public $test_id;
    public $blood_id;
    public $date;
    public $white_blood_cells;
    public $red_blood_cells;
    public $haemoglobin;
    public $hematrocrit;
    public $platelets;
    public $hiv_test;
    public $sodium;
    public $potassium;
    public $calcium;
    public $blood_status;


    public function create() {

        $this->validate([
            'test_id' => 'required',
            'blood_id' => 'required',
            'date' => 'required',
            'white_blood_cells' => 'required',
            'red_blood_cells'=> 'required',
            'haemoglobin' => 'required',
            'hematrocrit' => 'required',
            'platelets' => 'required',
            'hiv_test' => 'required',
            'sodium'=> 'required',
            'potassium'=> 'required',
            'calcium'=> 'required',
            'blood_status' => 'required',
        ]);

        BloodInformation::create([
            'user_id' => auth()->user()->id,
            'test_id'=> $this->test_id,
            'blood_id'=> $this->blood_id,
            'date'=> $this->date,
            'white_blood_cells'=> $this->white_blood_cells,
            'red_blood_cells'=> $this->red_blood_cells,
            'haemoglobin'=> $this->haemoglobin,
            'hematrocrit'=> $this->hematrocrit,
            'platelets'=> $this->platelets,
            'hiv_test'=> $this->hiv_test,
            'sodium'=> $this->sodium,
            'potassium'=> $this->potassium,
            'calcium'=> $this->calcium,
            'blood_status'=> $this->blood_status,
        ]);

        $this->reset([
            'test_id',
            'blood_id',
            'date',
            'white_blood_cells',
            'red_blood_cells',
            'haemoglobin',
            'hematrocrit',
            'platelets',
            'hiv_test',
            'sodium',
            'potassium',
            'calcium',
        ]);

        $this->dialog()->success(
            $title = 'Successfully',
            $description = 'Blood collection added succesfully.'
        );



    }
    public function render()
    {
        $bloodIds = Donate::pluck('blood_id', 'blood_id')->unique(); // Fetch unique blood IDs
        return view('livewire.blood-test-page.blood-test-page', [
            'bloodIds' => $bloodIds,
        ])->extends('layouts.main');
    }
}
