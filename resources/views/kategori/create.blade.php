@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="container">
    <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-heading">Tambah Data mau kategori apa? 
          <div class="panel-title pull-right"><a href="{{ route('kategori.index') }}">Kembali kedata</a>
          </div>
        </div>
        <div class="panel-body">
          <form action="{{ route('kategori.store') }}" method="post" >
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('nasi') ? ' has-error' : '' }}">
              <label class="control-label">mau nasi apa?</label>  
              <input type="text" name="nasi" class="form-control"  required>
              @if ($errors->has('nasi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nasi') }}</strong>
                            </span>
                        @endif
            </div>

            <div class="form-group {{ $errors->has('ayam') ? ' has-error' : '' }}">
              <label class="control-label">mau ayam apa?</label>  
              <input type="text" name="ayam" class="form-control"  required>
              @if ($errors->has('ayam'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ayam') }}</strong>
                            </span>
                        @endif
            </div>

            <div class="form-group {{ $errors->has('minuman') ? ' has-error' : '' }}">
              <label class="control-label">minuman rasa apa?</label> 
              <input type="text" name="minuman" class="form-control"  required>
              @if ($errors->has('minuman'))
                            <span class="help-block">
                                <strong>{{ $errors->first('minuman') }}</strong>
                            </span>
                        @endif
            </div>

            <div class="form-group {{ $errors->has('ice_cream') ? ' has-error' : '' }}">
              <label class="control-label">ice cream rasa apa?</label> 
              <input type="text" name="ice_cream" class="form-control"  required>
              @if ($errors->has('ice_cream'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ice_cream') }}</strong>
                            </span>
                        @endif
            </div>

            <div class="form-group {{ $errors->has('dessert') ? ' has-error' : '' }}">
              <label class="control-label">dessertnya mau apa?</label> 
              <input type="text" name="dessert" class="form-control"  required>
              @if ($errors->has('dessert'))
                            <span class="help-block">
                                <strong>{{ $errors->first('dessert') }}</strong>
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