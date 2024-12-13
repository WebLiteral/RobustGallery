<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{

    use HasFactory;

    public $timestamps = true; 
    protected $fillable = ['title', 'description', 'creation_date', 'slug', 'file_url'];

}


