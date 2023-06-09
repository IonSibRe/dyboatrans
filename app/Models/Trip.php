<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "descShort",
        "price",
        "descLong",
        "date",
        "departure",
        "priceIncludes",
        "priceNotIncludes",
        "images"
    ];
}
