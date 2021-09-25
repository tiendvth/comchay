<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'districtId',
        'wardId',
        'totalPrice',
        'shipName',
        'shipPhone',
        'shipAddress',
        'note',
        'status'
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'orderId');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'districtId');
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'wardId');
    }
}
