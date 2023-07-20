<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gardenReg extends Model
{

    protected $fillable = [
        'GardenName',
        'GardenSize',
        'PlatingDate',
        'varietyPlanted',
        'SeedClass',
        'seedBoughtFrom',
        'OwnershipOfLand',
        'NameOfSeller',
        'SellerLocation',
        'SellerContactNumber',
        'PurposeOfPlanting',
    ];

    use HasFactory;
}
