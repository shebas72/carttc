<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicletype extends Model
{
    use HasFactory;
    protected $fillable = [
        'vt_make',
        'vt_model',
        'vt_logo'
    ];
}
