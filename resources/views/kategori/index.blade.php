@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data kategori kategori
			  	<div class="panel-title pull-right"><a href="{{ route('kategori.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>nasi</th>
					  <th>ayam </th>
					  <th>minuman rasa</th>
					  <th>ice cream rasa</th>
					  <th>dessert</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($kategori as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nasi }}</td>
				    	<td>{{ $data->ayam }}</td>
				    	<td>{{ $data->minuman }}</td>
				    	<td>{{ $data->ice_cream }}</td>
				    	<td><p>{{ $data->dessert }}</p></td>
						<td>
							<a class="btn btn-warning" href="{{ route('kategori.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('kategori.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('kategori.destroy',$data->id) }}">
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