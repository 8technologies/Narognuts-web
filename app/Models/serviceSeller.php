<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSeller extends Model
{
protected $fillable = [

    'serviceSellerCompany',
    'serviceName',
    'type',
    'offerType',
    'conditions',
    'price',
    'Remarks',
    'image_path',
];

    use HasFactory;
}
