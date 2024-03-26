<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    // uso il fillable per decidere quali
    protected $fillable = [
        "company",
        "from",
        "to",
        "departure_time",
        "arrival_time",
        "train_code",
        "coaches_number",

    ];
}
