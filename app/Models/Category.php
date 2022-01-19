<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table="categories";
    protected $fillable = [
        'category_name',
        'meta_keywords',
        'category_slug',
        'category_desc',
        'category_status',
        "parent_id"
    ];
    public function Product(){
        return $this->hasMany(Product::class);
    }
}
