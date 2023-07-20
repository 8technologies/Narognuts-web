<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class farmerRecord extends Model
{


    protected $fillable = [
        'FirstName',
        'MiddleName',
        'LastName',
        'Sex',
        'PhoneNumber',
        'SubCounty',
        'Village',
        'Association',
        'ProductionScale',
        'NumberOfDependants',
        'LevelOfEducation'
    ];
    use HasFactory;
}
