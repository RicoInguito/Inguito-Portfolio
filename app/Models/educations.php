<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class educations extends Model
{
    use HasFactory;
    protected $fillable = [
        "school",
        "school_address",
        "school_year",
    ] ;
}
