<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlyRoute extends Model
{
    use HasFactory;
   
    protected $fillable =[
        'SourceFa',
        'SourceEN',
        'Source_Symbol',
        'DestinationFa',
        'DestinationEN',
        'Destination_Symbol'

    ];

}
