<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GardenReg extends Model
{
    use HasFactory;

    protected $table = 'garden_regs';

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

}
