<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passengerluggage_rules extends Model
{
    use HasFactory;

     protected $fillable =[
        'NumberOfLuggage',
        'LuggageWeight',
        'NumberOfhandbag',
        'handbagWeight'

    ];

}
