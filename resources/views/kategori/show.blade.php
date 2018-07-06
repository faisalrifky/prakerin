@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Lihat Data kategori
			  	<div class="panel-title pull-right"><a href="{{ route('kategori.index') }}">Kembali kedata</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">nasi</label>
			  			<input type="text" name="nasi" class="form-control" value="{{ $kategori->nasi }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">ayam</label>	
			  			<input type="text" name="ayam" class="form-control" value="{{ $kategori->ayam }}"  
			  			readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">minuman</label>	
			  			<input type="text" name="minuman" class="form-control" value="{{ $kategori->minuman }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">ice cream</label>	
			  			<input type="text" name="ice_cream" class="form-control" value="{{ $kategori->ice_cream }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">dessert</label>	
			  			<input type="text" name="dessert" class="form-control" value="{{ $kategori->dessert }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection