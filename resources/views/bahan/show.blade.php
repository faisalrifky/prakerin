@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Lihat Data bahan
			  	<div class="panel-title pull-right"><a href="{{ route('bahan.index') }}">Kembali kedata</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">bahan baku</label>
			  			<input type="text" name="bahan" class="form-control" value="{{ $bahan->bahan }}"  readonly>
			  		</div>
			  <div class="form-group">
			  			<label class="control-label">harga bahan</label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $bahan->harga }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection