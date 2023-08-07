<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeedSeller extends Model
{

    protected $fillable = [
        'Name',
        'Quantity',
        'Unit',
        'Price_Per_Unit',
        'PaymentMode',
        'Remarks',
        'image_path',
    ];
    use HasFactory;
}
