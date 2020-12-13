<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggestions extends Model
{
//    use HasFactory;

    protected $table = 'suggestions';
    protected $fillable = ['suggestion_title','suggestion_text','suggestion_deadline'];


}
