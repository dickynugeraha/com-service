<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "order_date",
        "address",
        "product",
        "category",
        "price",
        "payment_method",
        "status"
    ];
}
