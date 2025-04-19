<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'office_agency',
        'appearance_date',
        'purpose',
        'issued_date'

    ];
}
