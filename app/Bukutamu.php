<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bukutamu extends Model
{
    protected $table = 'bukutamus';
    protected $fillable = [
        'name', 'address', 'email', 'no_telp', 'information', 'type', 'created_at', 'updated_at'
    ];

    public static function valid(){
        return array(
            'name' => 'required',
            'email' => 'required',
            'type' => 'required'
        );
    }
}
