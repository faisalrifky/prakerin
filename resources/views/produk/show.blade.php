@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Lihat Data produk
			  	<div class="panel-title pull-right"><a href="{{ route('produk.index') }}">Kembali kedata</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">nama</label>
			  			<input type="text" name="nama" class="form-control" value="{{ $produk->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">jenis</label>	
			  			<input type="text" name="jenis" class="form-control" value="{{ $produk->jenis }}"  
			  			readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">harga</label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $produk->harga }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">bahan</label>	
			  			<input type="text" name="bahan" class="form-control" value="{{ $produk->bahan }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">kategori</label>	
			  			<input type="text" name="kategori" class="form-control" value="{{ $produk->kategori }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection