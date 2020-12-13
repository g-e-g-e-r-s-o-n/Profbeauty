<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
//    use HasFactory;


    protected $table = 'offers';
    protected $fillable = ['offer_text','offer_url','offer_image'];


}
