<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientCollection extends Model
{
    use HasFactory;

    protected $table = 'patient_collections';
    protected $fillable = [
        'user_id',
        'patient_id',
        'patient_full_name',
        'date',
        'phone_number',
        'gender',
        'required_blood_group',
        'hospital_address',
        'hospital_name',
        'hospital_contact',
        'quantity_required',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
