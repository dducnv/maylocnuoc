<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaSeo extends Model
{
    use HasFactory;
    protected $table = "meta_seo";
    protected $fillable  = [
        "meta_keywords",
        "meta_desc",
        "meta_image",
        "phone_number",
        "email",
        "address",
    ];
}
