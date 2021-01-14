<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armada extends Model
{
    protected $table = 'armadas';
    protected $fillable = [
        'name', 'location', 'description', 'created_at', 'updated_at'
    ];

    public static function valid(){
        return array(
            'name' => 'required',
            'location' => 'required',
            'description' => 'required'
        );
    }
}
