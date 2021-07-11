<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing_policy extends Model
{
    use HasFactory;
    protected $fillable =[
       'SeatNo_from',
       'SeatNO_TO',
       'Price_Percentage'
    ];

}
