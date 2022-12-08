<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeverageDetail extends Model
{
    use HasFactory;
    
    protected $table = 'beverage_details';
    protected $fillable = ['beverage','quantity'];
}
