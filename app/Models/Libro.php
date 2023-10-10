<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $table="book";
    protected $fillable=[
        "code",
        "title",
        "author",
        "country",
        "year",
        "publisher",
        "edition",
        "empresas_id",
        "category_id",
        "provider_id",
        "price",
        "copies",
        "address",
        "summary",
        "image_name",
        "pdf_name",
        "downloadable"
    ];
}
