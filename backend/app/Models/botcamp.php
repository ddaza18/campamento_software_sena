<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class botcamp extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", 
        "description",
         "website",
          "phone",
          "user_id",
          "average_cost", 
        "average_cost",
        "average_rating"
    ];
}
