<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fanart extends Model
{
    /** @use HasFactory<\Database\Factories\FanartFactory> */
    use HasFactory;



    public $timestamps = true; 
    protected $fillable = ['artist_name', 'creation_date', 'slug'];

}
