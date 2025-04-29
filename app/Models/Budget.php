<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $table = 'budgets';

    // Fix here: use 'category' instead of 'name' and remove unused fields
    protected $fillable = ['category', 'amount'];
}

