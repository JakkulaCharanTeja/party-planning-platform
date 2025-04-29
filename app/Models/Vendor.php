<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    // Define which fields are mass assignable
    protected $fillable = [
        'name', 
        'service_type', 
        'contact_info', 
        'price',
    ];
}

