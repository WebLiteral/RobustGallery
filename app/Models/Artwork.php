<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{

    use HasFactory;

// she's a beauty!!!!!!

    public function collections()
    {
        return $this->belongsToMany(Collection::class);
    }
}


