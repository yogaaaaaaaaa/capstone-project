<?php

namespace App\Models;

use App\Models\User;
use App\Models\DetailOrder;
use App\Models\FinancialReport;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = ['order_code', 'order_name', 'order_address', 'order_type', 'no_hp', 'email', 'design_link', 'quantity', 'description', 'payment_status', 'order_status', 'user_id'];

    protected $enumStatuses = ['Belum diproses', 'Sedang diproses', 'Selesai'];

    // Membuat accessor untuk mengambil daftar nilai ENUM
    public function getStatusOptionsAttribute()
    {
        return $this->enumStatuses;
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function detailorder() {
        return $this->hasMany(DetailOrder::class);
    }
}
