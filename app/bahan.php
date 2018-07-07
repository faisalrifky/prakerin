<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bahan extends Model
{
     protected $table = 'bahan_bahans';
    protected $fillable = ['bahan','harga'];
    public $timestamps = true;
    public function produk()
    {
    	return $this->hasmany('App\produk','bahan_id');
    }
}

