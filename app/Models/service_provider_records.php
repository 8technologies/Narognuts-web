<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_provider_records extends Model
{

    protected $fillable = [
        'FirstName',
        'MiddleName',
        'LastName',
        'Sex',
        'PhoneNumber',
        'ServiceProvided',
        'Category',
        'YearsOfOperation',
        'DateOfRegistration',
        'RegistrationNumber'
    ];

    use HasFactory;
}
