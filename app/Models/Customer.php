<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customers";
    protected $fillable  = [
        "cus_name",
        "cus_email",
        "cus_tel",
        "cus_address",
    ];
}
