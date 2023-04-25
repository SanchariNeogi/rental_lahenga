<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    public $table = 'addresses'; 
    public $fillable = ['user_id', 'first_name', 'last_name', 'phone', 'email', 'address_type', 'street_address', 'postcode', 'city'];    
}
