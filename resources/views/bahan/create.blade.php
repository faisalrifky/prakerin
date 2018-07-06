@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="container">
    <div class="col-md-12">
      <div class="panel panel-success">
        <div class="panel-heading">Tambah Data bahan
          <div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
          </div>
        </div>
        <div class="panel-body">
          <form action="{{ route('bahan.store') }}" method="post" >
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('bahan') ? ' has-error' : '' }}">
              <label class="control-label">bahan </label>  
              <input type="text" name="bahan" class="form-control" required>
              @if ($errors->has('bahan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bahan') }}</strong>
                            </span>
                        @endif
            </div>

            <div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
              <label class="control-label">harga bahan baku</label>  
              <input type="text" name="harga" class="form-control" rows="10" required>
              @if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
          </form>
        </div>
      </div>  
    </div>
  </div>
</div>
@endsection