<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationBlood extends Model
{
    use HasFactory;
    protected $table = 'donation_blood';
    protected $fillable = [
        'donor_id',
        'patient_id',

    ];
    public $timestamps = false;
}
