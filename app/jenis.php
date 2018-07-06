<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
       protected $table = 'jenis';
    protected $fillable = ['nama'];
    public $timestamps = true;
    public function produk()
    {
    	return $this->hasmany('app\produk','jenis_id');
    }
}
