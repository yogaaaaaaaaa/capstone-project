<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FinancialReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'amount_of_income',
    ];

    // Definisikan relasi antara FinancialReport dan Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
