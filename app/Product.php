<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name', 'qty_unit', 'price_unit', 'description', 'type', 'foto', 'armada_id', 'created_at', 'updated_at'
    ];

    public static function valid(){
        return array(
            'name' => 'required',
            'qty_unit' => 'required',
            'price_unit' => 'required',
            'type' => 'required',
            'foto' => 'required',
            'armada_id' => 'required'
        );
    }
}
