<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
//    use HasFactory;

    protected $table = 'products';
    protected $fillable = ['prod_ID','prod_name','prod_price','prod_description','prod_category','prod_brand','prod_tags','image'];

    public function images()
    {
        return $this->hasMany(Images::class, 'foreign_prod_ID', 'id');
    }
}
