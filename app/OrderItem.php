<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';
    protected $fillable = [
        'qty_unit', 'total', 'order_id', 'product_id', 'created_at', 'updated_at'
    ];

    public static function valid(){
        return array(
            'qty_unit' => 'required',
            'total' => 'required',
            'order_id' => 'required',
            'product_id' => 'required'
        );
    }
}
