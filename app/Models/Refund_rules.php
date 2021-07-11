<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refund_rules extends Model
{
    use HasFactory;

    protected $fillable =[
        'PassengerType',
        'PeriodOfTime',
        'TypeOfTime',
        'Penalty'
        ];

   
}
