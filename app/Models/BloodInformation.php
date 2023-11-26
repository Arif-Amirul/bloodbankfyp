<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodInformation extends Model
{
    use HasFactory;

    protected $table = 'blood_information';
    protected $fillable = [
        'user_id',
        'test_id',
        'blood_id',
        'date',
        'white_blood_cells',
        'neutrophils',
        'red_blood_cells',
        'haemoglobin',
        'hematrocrit',
        'mcv',
        'platelets',
        'cd4_cd8',
        'hiv_test',
        'glicaemia',
        'transferrin',
        'ferritim',
        'sodium',
        'potassium',
        'calcium',
        'plasma_proteins',
        'albumin',
        'prealbumin',
        'gamma_globulins',
        'alt',
        'gamma_gt',
        'blood_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
