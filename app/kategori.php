<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
     protected $table = 'kategoris';
    protected $fillable = ['ayam','nasi','minuman','ice_cream','dessert'];
    public $timestamps = true;
    public function produk()
     {
    	return $this->hasmany('app\produk','kategori_id');
    }
}
