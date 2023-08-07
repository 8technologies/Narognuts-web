<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmerRecord extends Model
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
// public function user(){
//     return $this->belongsTo(User::class);
// }
    use HasFactory;
}
