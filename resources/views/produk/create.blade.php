@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="container">
    <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-heading">Tambah Data produk 
          <div class="panel-title pull-right"><a href="{{ route('produk.index') }}">Kembali kedata</a>
          </div>
        </div>
        <div class="panel-body">
          <form action="{{ route('produk.store') }}" method="post" >
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
              <label class="control-label">nama</label>  
              <input type="text" name="nama" class="form-control"  required>
              @if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
            </div>
            <div class="panel-body">
          <form action="{{ route('produk.store') }}" method="post" >
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
              <label class="control-label">harga</label>  
              <input type="text" name="harga" class="form-control"  required>
              @if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
            </div>

           <div class="form-group {{$errors->has('bahan_id')?'has-error':''}}">
            <label class="control-label">bahan_id </label> 
            <select name="bahan_id" class="form-control">
              @foreach($bahan as $data)
              <option value="{{$data->id}}">{{$data->nama}}</option>
              @endforeach
            </select>
            @if($errors->has('bahan_id'))
            <span class="help-block">
              <strong> {{$errors->first('bahan_id')}}</strong>
            </span>
            @endif
           </div> 
           <div class="form-group {{$errors->has('jenis_id')?'has-error':''}}">
            <label class="control-label">jenis_id </label> 
            <select name="jenis_id" class="form-control">
              @foreach($jenis as $data)
              <option value="{{$data->id}}">{{$data->nama}}</option>
              @endforeach
            </select>
            @if($errors->has('jenis_id'))
            <span class="help-block">
              <strong> {{$errors->first('jenis_id')}}</strong>
            </span>
            @endif
           </div> 
          
          <div class="form-group {{$errors->has('kategori_id')?'has-error':''}}">
            <label class="control-label">kategori_id </label> 
            <select name="kategori_id" class="form-control">
              @foreach($kategori as $data)
              <option value="{{$data->id}}">{{$data->nama}}</option>
              @endforeach
            </select>
            @if($errors->has('kategori_id'))
            <span class="help-block">
              <strong> {{$errors->first('kategori_id')}}</strong>
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
@endsection