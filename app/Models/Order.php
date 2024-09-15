<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['item_id', 'quantity', 'status']; // Add any relevant fields
}
