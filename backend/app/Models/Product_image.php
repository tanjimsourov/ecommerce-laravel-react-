<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_image extends Model
{
    use HasFactory;

    protected $table = 'product_images';
    //public $timestamps = false;
    protected $fillable = [
        'image_path',
        'Product_ID'
    ];

    public function Product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
