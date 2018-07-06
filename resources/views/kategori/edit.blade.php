@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit data kategori makanan
			  	<div class="panel-title pull-right"><a href="{{ route('kategori.index') }}">Kembali ke data</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('kategori.update',$kategori->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nasi') ? ' has-error' : '' }}">
			  			<label class="control-label">nasi</label>	
			  			<input type="text" name="nasi" class="form-control" value="{{ $kategori->nasi }}"  required>
			  			@if ($errors->has('nasi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nasi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('ayam') ? ' has-error' : '' }}">
			  			<label class="control-label">ayam</label>	
			  			<input type="text" name="ayam" class="form-control" value="{{ $kategori->ayam }}"  
			  			required>
			  			@if ($errors->has('ayam'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ayam') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('minuman') ? ' has-error' : '' }}">
			  			<label class="control-label">dibuat dari bahan?</label>	
			  			<input type="text" name="minuman" class="form-control" value="{{ $kategori->minuman }}"  required>
			  			@if ($errors->has('minuman'))
                            <span class="help-block">
                                <strong>{{ $errors->first('minuman') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('ice_cream') ? ' has-error' : '' }}">
			  			<label class="control-label">ice cream</label>	
			  			<input type="text" name="ice_cream" class="form-control" value="{{ $kategori->ice_cream }}"  required>
			  			@if ($errors->has('ice_cream'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ice_cream') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('dessert') ? ' has-error' : '' }}">
			  			<label class="control-label">dessert</label>	
			  			<input type="text" name="dessert" class="form-control" value="{{ $kategori->dessert }}"  required>
			  			@if ($errors->has('dessert'))
                            <span class="help-block">
                                <strong>{{ $errors->first('dessert') }}</strong>
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