<?php

namespace App\Http\Livewire\ViewBloodTest;
use Livewire\Component;
use App\Models\BloodInformation;
use WireUi\Traits\Actions;

class ViewBloodTestPage extends Component
{
    use Actions;
    public $updateTestModal = false;
    public $viewTestMoreModal = false;
    public $test_id;
    public $blood_id;
    public $date;
    public $white_blood_cells;
    public $neutrophils;
    public $red_blood_cells;
    public $haemoglobin;
    public $hematrocrit;
    public $mcv;
    public $platelets;
    public $cd4_cd8;
    public $hiv_test;
    public $glicaemia;
    public $transferrin;
    public $ferritim;
    public $sodium;
    public $potassium;
    public $calcium;
    public $plasma_proteins;
    public $albumin;
    public $prealbumin;
    public $gamma_globulins;
    public $alt;
    public $gamma_gt;
    public $blood_status;
    public $BloodTest;

    public function openModalViewTestMore($id){
        $this->viewTestMoreModal = true;
        $this->BloodTest = BloodInformation::find($id);
        $this->white_blood_cells = $this->BloodTest->white_blood_cells;
        $this->neutrophils = $this->BloodTest->neutrophils;
        $this->red_blood_cells = $this->BloodTest->red_blood_cells;
        $this->haemoglobin = $this->BloodTest->haemoglobin;
        $this->hematrocrit = $this->BloodTest->hematrocrit;
        $this->mcv = $this->BloodTest->mcv;
        $this->platelets = $this->BloodTest->platelets;
        $this->cd4_cd8 = $this->BloodTest->cd4_cd8;
        $this->hiv_test =$this->BloodTest->hiv_test;
        $this->glicaemia = $this->BloodTest->glicaemia;
        $this->transferrin = $this->BloodTest->transferrin;
        $this->ferritim = $this->BloodTest->ferritim;
        $this->sodium = $this->BloodTest->sodium;
        $this->potassium = $this->BloodTest->potassium;
        $this->calcium = $this->BloodTest->calcium;
        $this->plasma_proteins = $this->BloodTest->plasma_proteins;
        $this->albumin = $this->BloodTest->albumin;
        $this->prealbumin = $this->BloodTest->prealbumin;
        $this->gamma_globulins = $this->BloodTest->gamma_globulins;
        $this->alt = $this->BloodTest->alt;
        $this->gamma_gt = $this->BloodTest->gamma_gt;
        $this->blood_status = $this->BloodTest->blood_status;
    }

    public function openModalUpdate($id){
        $this->updateTestModal = true;
        $this->BloodTest = BloodInformation::find($id);
        $this->test_id = $this->BloodTest->test_id;
        $this->date = $this->BloodTest->date;
        $this->white_blood_cells = $this->BloodTest->white_blood_cells;
        $this->neutrophils = $this->BloodTest->neutrophils;
        $this->red_blood_cells = $this->BloodTest->red_blood_cells;
        $this->haemoglobin = $this->BloodTest->haemoglobin;
        $this->hematrocrit = $this->BloodTest->hematrocrit;
        $this->mcv = $this->BloodTest->mcv;
        $this->platelets = $this->BloodTest->platelets;
        $this->cd4_cd8 = $this->BloodTest->cd4_cd8;
        $this->hiv_test =$this->BloodTest->hiv_test;
        $this->glicaemia = $this->BloodTest->glicaemia;
        $this->transferrin = $this->BloodTest->transferrin;
        $this->ferritim = $this->BloodTest->ferritim;
        $this->sodium = $this->BloodTest->sodium;
        $this->potassium = $this->BloodTest->potassium;
        $this->calcium = $this->BloodTest->calcium;
        $this->plasma_proteins = $this->BloodTest->plasma_proteins;
        $this->albumin = $this->BloodTest->albumin;
        $this->prealbumin = $this->BloodTest->prealbumin;
        $this->gamma_globulins = $this->BloodTest->gamma_globulins;
        $this->alt = $this->BloodTest->alt;
        $this->gamma_gt = $this->BloodTest->gamma_gt;
        $this->blood_status = $this->BloodTest->blood_status;
    }

    public function update($id){
        $this->BloodTest->update([
            'test_id'=> $this->test_id,
            'date'=> $this->date,
            'white_blood_cells'=> $this->white_blood_cells,
            'neutrophils'=> $this->neutrophils,
            'red_blood_cells'=> $this->red_blood_cells,
            'haemoglobin'=> $this->haemoglobin,
            'hematrocrit'=> $this->hematrocrit,
            'mcv'=> $this->mcv,
            'platelets'=> $this->platelets,
            'cd4_cd8'=> $this->cd4_cd8,
            'hiv_test'=> $this->hiv_test,
            'glicaemia'=> $this->glicaemia,
            'transferrin'=> $this->transferrin,
            'ferritim'=> $this->ferritim,
            'sodium'=> $this->sodium,
            'potassium'=> $this->potassium,
            'calcium'=> $this->calcium,
            'plasma_proteins'=> $this->plasma_proteins,
            'albumin'=> $this->albumin,
            'prealbumin'=> $this->prealbumin,
            'gamma_globulins'=> $this->gamma_globulins,
            'alt'=> $this->alt,
            'gamma_gt'=> $this->gamma_gt,
            'blood_status'=> $this->blood_status,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $this->updateTestModal = false;

        $this->dialog([
            'title'       => 'Data Updated!',
            'description' => 'Data was successfully updated',
            'icon'        => 'success'
        ]);
    }

    public function delete($id){

        $BloodTest = BloodInformation::find($id);
        $BloodTest->delete();
        $this->test_id = $BloodTest->test_id;
        $this->blood_id = $BloodTest->blood_id;
        $this->date = $BloodTest->date;
        $this->white_blood_cells = $BloodTest->white_blood_cells;
        $this->neutrophils = $BloodTest->neutrophils;
        $this->red_blood_cells = $BloodTest->red_blood_cells;
        $this->haemoglobin = $BloodTest->haemoglobin;
        $this->hematrocrit = $BloodTest->hematrocrit;
        $this->mcv = $BloodTest->mcv;
        $this->platelets = $BloodTest->platelets;
        $this->cd4_cd8 = $BloodTest->cd4_cd8;
        $this->hiv_test = $BloodTest->hiv_test;
        $this->glicaemia = $BloodTest->glicaemia;
        $this->transferrin = $BloodTest->transferrin;
        $this->ferritim = $BloodTest->ferritim;
        $this->sodium = $BloodTest->sodium;
        $this->potassium = $BloodTest->potassium;
        $this->calcium = $BloodTest->calcium;
        $this->plasma_proteins = $BloodTest->plasma_proteins;
        $this->albumin = $BloodTest->albumin;
        $this->prealbumin = $BloodTest->prealbumin;
        $this->gamma_globulins = $BloodTest->gamma_globulins;
        $this->alt = $BloodTest->alt;
        $this->gamma_gt = $BloodTest->gamma_gt;
        $this->blood_status = $BloodTest->blood_status;

        $this->dialog([
            'title'       => 'Data Deleted!',
            'description' => 'Data was successfully deleted',
            'icon'        => 'success'
        ]);
    }

    public function render()
    {
        $BloodTest = BloodInformation::all();

        return view('livewire.view-blood-test.view-blood-test-page', [
            'blooddata' =>  $BloodTest,
        ])->extends('layouts.main');
    }
}
