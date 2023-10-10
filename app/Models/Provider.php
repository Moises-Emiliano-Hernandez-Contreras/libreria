<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $table="provider";
    protected $fillable=[
        "name",
        "supervisor",
        "phone",
        "email",
        "address"
    ];
}
