<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = [ 'id', 'order_id', 'product_color_quality_id', 'quantity', 'price','discount'];
    protected $table = 'order_details';

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function productColorQuality()
    {
        return $this->belongsTo(productColorQuality::class);
    }
}
