<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public $table = 'categories';

    public $fillable = [
        'name_category',
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }
}
