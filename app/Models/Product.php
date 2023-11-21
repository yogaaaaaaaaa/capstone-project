<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    public $table = 'products';

    public $fillable = ['name_product', 'image', 'stock', 'price', 'category_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
