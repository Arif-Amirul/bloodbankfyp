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
        'identification_number',
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
        'blood_group',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
