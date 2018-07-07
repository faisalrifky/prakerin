/@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit data produk
			  	<div class="panel-title pull-right"><a href="{{ route('produk.index') }}">Kembali ke data</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('produk.update',$produk->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $produk->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">harga</label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $produk->harga }}"  
			  			required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>

					<div class="form-group">
			  			<label for="cc-payment" class="control-label">bahan</label>	
			  			<select class="form-control" name="bahan_id" required>
			  			@foreach ($bahan as $data)
                            <option value="{{ $data->id }}">{{ $data->nama}}</option>
                        @endforeach
                        </select>
			  		</div>
				  	<div class="form-group">
			  			<label for="cc-payment" class="control-label">jenis_id</label>	
			  			<select class="form-control" name="jenis_id" required>
			  			@foreach ($jenis as $data)
                            <option value="{{ $data->id }}">{{ $data->nama}}</option>
                        @endforeach
                        </select>
			  		</div>

			  		<div class="form-group">
			  			<label for="cc-payment" class="control-label">kategori_id</label>	
			  			<select class="form-control" name="kategori_id" required>
			  			@foreach ($kategori as $data)
                            <option value="{{ $data->id }}">{{ $data->nama}}</option>
                        @endforeach
                        </select>
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