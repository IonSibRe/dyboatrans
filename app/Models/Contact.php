<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public $fillable = [
        "fullname", "phone", "departure", "destination", "vehicle_type", "company", "email", "arrival", "people_count"
    ];
}
