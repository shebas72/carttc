<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    use HasFactory;
    protected $fillable = [
        'd_name',
        'd_email',
        'd_password',
        'd_phone',
        'd_role'
    ];
}
