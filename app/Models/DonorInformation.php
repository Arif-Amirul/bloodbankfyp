<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DonorInformation extends Model
{
    use HasFactory;

    protected $table = 'donor_information';
    protected $fillable = [
        'user_id',
        'donor_id',
        'blood_group',
        'full_name',
        'phone_number',
        'marital_status',
        'date',
        'gender',
        'race',
        'street_address',
        'city',
        'state',
        'postal_code',
        'donation_date',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
