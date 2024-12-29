<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //Define the table name
    protected $table = 'orders';

    //Define the fillable columns
    protected $fillable = ['order_id', 'customer_id', 'product_id', 'quantity', 'total_price', 'order_date'];

    //Disable timestamps
    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
