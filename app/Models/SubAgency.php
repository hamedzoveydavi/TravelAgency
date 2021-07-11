<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubAgency extends Model
{
    use HasFactory;

    protected $fillable =[
        'SubAgency_NameFA',
        'SubAgency_NameEN',
        'SubAgency_ManagerNameFA',
        'SubAgency_ManagerNameEN',
        'SubAgency_RegisterNo',
        'SubAgency_Email',
        'SubAgency_Address',
        'SubAgency_Logo',
        'SubAgency_Tel',
        'SubAgency_Fax'
        ];
}
