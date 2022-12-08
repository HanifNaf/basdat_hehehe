<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SnackDetail extends Model
{
    use HasFactory;
    
    protected $table = 'snack_details';
    protected $fillable = ['name','price','quantity','image'];
}
 