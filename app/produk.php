<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table='produks';
    protected $fillable=['nama','harga','bahan_id','jenis_id','kategori_id'];
    public $timestamp=true;

    public function bahan(){
    	return $this->belongsTo('App\bahan','bahan_id');
    }

    public function jenis(){
    	return $this->belongsTo('App\jenis','jenis_id');
    }

    public function kategori(){
    	return $this->belongsTo('App\kategori','kategori_id');
    }
}
