@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data produk
			  	<div class="panel-title pull-right"><a href="{{ route('produk.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>nama</th>
					  <th>jenis </th>
					  <th>harga</th>
					  <th>bahan</th>
					  <th>kategori</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor=1;?>
				  		@php $no = 1; @endphp
				  		@foreach($produk as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td>{{ $data->jenis_id }}</td>
				    	<td>{{ $data->harga }}</td>
				    	<td>{{ $data->bahan_id }}</td>
				    	<td><p>{{ $data->kategori_id }}</p></td>
						<td>
							<a class="btn btn-warning" href="{{ route('produk.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('produk.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('produk.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection	X