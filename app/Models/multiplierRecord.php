<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiplierRecord extends Model
{



    protected $fillable = [
        'FirstName',
        'MiddleName',
        'LastName',
        'Sex',
        'PhoneNumber',
        'EnterpriseName',
        'DistrictOfOperation',
        'DateOfRegistration',
        'RegistrationNumber',
        'SectorOfSpecialisation',
    ];

    use HasFactory;

  
}
