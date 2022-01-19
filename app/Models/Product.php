<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
      'product_name',
      'product_image',
      'product_gallery',
      'product_slug',
      'product_views',
      'product_sold',
      'product_tags',
      'product_price',
      'product_desc',
      'product_content',
      'product_status',
      'category_id',
      'brand_id',
    ];
    public function Category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function Brand(){
        return $this->belongsTo(Brand::class,'brand_id');
    }
}
