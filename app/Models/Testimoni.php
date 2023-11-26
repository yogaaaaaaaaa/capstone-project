<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimoni extends Model
{
    use HasFactory;

    protected $table = 'testimonis';

    protected $fillable = ['critique_suggestions', 'product_value', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
