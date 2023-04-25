<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $table = 'orders'; 
    public $fillable = ['user_id', 'address_id', 'order_id', 'total_price', 'pay_way', 'transaction_id'];       
} 
