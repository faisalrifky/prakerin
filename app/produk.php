<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
     protected $table = 'produks';
    protected $fillable = ['no','nama','jenis','harga','bahan','kategori'];
    public $timestamps = true;
    public function produk()
    {
    	return $this->hasmany('app\bahan','produk_id');
    }
    {
    	return $this->hasmany('app\jenis','produk_id');
    }
    {
    	return $this->hasmany('app\kategori','produk_id');
    }
    
}
