<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable =[
      'CompanyName_FA',
      'CompanyName_EN',
      'ManagerName_FA',
      'ManagerName_EN',
      'Register_No',
      'Company_Email',
      'Company_Logo',
      'Company_Address',
      'Tel',
      'Fax'

        ];
}
