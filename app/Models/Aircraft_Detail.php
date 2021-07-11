<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aircraft_Detail extends Model
{
    use HasFactory;

    protected $fillable =[
        'Type_Name',
        'Class_Name',
        'Total_Chair'
    ];
    
    
}
