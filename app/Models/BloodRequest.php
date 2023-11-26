<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model
{
    use HasFactory;
    protected $table = 'blood_requests';
    protected $fillable = [
        'user_id',
        'transfer_id',
        'transfer_date',
        'location',
        'required_blood_group',
        'patient_id',
        'blood_id',
    ];

    public $timestamps = false;
}