<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'menu_items';

    // Specify the fields that are mass assignable
    protected $fillable = ['name', 'description', 'price'];
}
