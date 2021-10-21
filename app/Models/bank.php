<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
    use HasFactory;
    protected $fillable = [
        'License',
        'Model',
        'Year',
        'Chasis_number',
        'Bank_Name',
        'Color',
        'Condition',
        'Key_Available',
        'venid'
    ];
}
