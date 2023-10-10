<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    use HasFactory;
    protected $fillable = [
        "dni",
        "name",
        "phone",
        "email",
        "address",
        "CEOname",  
        "currency",      
        "year"
    ];
}
