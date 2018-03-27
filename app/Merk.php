<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    public function Barang(){
    	return $this->hasMany('App\Barang');
    }
}
