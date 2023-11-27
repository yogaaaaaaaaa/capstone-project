<?php

namespace App\Models;

use App\Models\Category;
use App\Models\DetailOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    
    public $table = 'products';

    public $fillable = ['name_product', 'image', 'stock', 'price', 'category_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function detailorder() {
        return $this->belongsTo(DetailOrder::class);
    }
}
