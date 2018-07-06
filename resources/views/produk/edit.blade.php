@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit data baju
			  	<div class="panel-title pull-right"><a href="{{ route('bahan_bahans.index') }}">Kembali ke data</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('bahan_bahans.update',$bahan_bahans->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('bahan') ? ' has-error' : '' }}">
			  			<label class="control-label">bahan baku makanan</label>	
			  			<input type="text" name="bahan" class="form-control" value="{{ $bahan_bahans->bahan }}"  required>
			  			@if ($errors->has('bahan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bahan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">dipakai pada saat?</label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $bahan_bahans->harga }}"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection