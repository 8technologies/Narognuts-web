<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asktheexpert extends Model
{
    protected $fillable=[
        'Question',
       'file_path',
    ];
    use HasFactory;
}
