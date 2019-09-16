<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'Driving_Liscence_number',
        'Vehicle_type',
        'Vehicle_Number'       
    ];
    }