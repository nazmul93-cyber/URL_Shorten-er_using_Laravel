<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shorturl extends Model
{
    use HasFactory;  

    // public $table = "shorturls";     // not needed since names were matched

    public $timestamps = false; 

    protected $fillable = ['url','short'];      // shows Add [url] to fillable property to allow mass assignment error if not written

}


