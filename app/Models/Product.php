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
        'product_specification',
        'product_status',
        'category_id',
        'brand_id',
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function Brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function scopeSearch($query,$search){
        if($search == "" || $search == null){
            return $query;
        }
        return $query->where("product_name","LIKE","%$search%");
    }
    public function scopeCategory($query,$categoryId){
        if($categoryId==0 || $categoryId == null){
            return $query;
        }
        return $query->where("category_id",$categoryId);
    }


}
