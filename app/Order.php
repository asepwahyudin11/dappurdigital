<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'name', 'email', 'no_telp', 'alamat', 'date_from', 'date_to', 'titik_jemput', 'tujuan', 'total_harga', 'status', 'created_at', 'updated_at'
    ];

    public static function valid(){
        return array(
            'name' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'date_from' => 'required',
            'date_to' => 'required',
            'titik_jemput' => 'required',
            'tujuan' => 'required',
            'total_harga' => 'required',
            'status' => 'required'
        );
    }
}
