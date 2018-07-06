@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Lihat Data jenis
			  	 <div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
          </div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">nama</label>
			  			<input type="text" name="nama" class="form-control" value="{{ $jenis->nama }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection