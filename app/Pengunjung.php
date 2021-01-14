<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    protected $table = 'hitung_pengunjung';
    protected $fillable = [
        'date', 'qty', 'created_at', 'updated_at'
    ];

    public static function valid(){
        return array(
            'date' => 'required',
            'qty' => 'required'
        );
    }
}
