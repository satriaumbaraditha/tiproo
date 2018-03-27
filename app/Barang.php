<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function Merk(){
    	return $this->belongsTo('App\Merk');
    }
}

