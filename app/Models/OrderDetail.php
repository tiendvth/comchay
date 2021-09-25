<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'orderId',
        'productId',
        'quantity',
        'unitPrice'
    ];
    public function product() {
        return $this->belongsTo(Product::class, 'productId');
    }
    public function order() {
        return $this->belongsTo(Order::class,'orderId');
    }
}
