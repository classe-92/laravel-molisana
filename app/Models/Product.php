<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //protected $table = 'libri';

    protected $fillable = ['title', 'weight', 'type', 'image', 'description', 'cooking_time'];
    //protected $guarded = [];
}