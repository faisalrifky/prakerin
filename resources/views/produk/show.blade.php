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
			  <div class="form-group">
			  			<label class="control-label">harga bahan</label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $bahan_bahans->harga }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection