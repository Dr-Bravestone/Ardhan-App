@extends('layout.main')
@section('judul_halaman', 'Halaman tambah Fakultas')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">TABLE FAKULTAS BARU</h4>
          <div class="card-body">
            <h4 class="card-title">Form</h4>
            <p class="card-description">
              Silahkan Isi Form
            </p>
            <form action="{{route('fakultas.store')}}" method="POST" class="forms-sample">
                @csrf
              <div class="form-group">
                <label for="exampleInputUsername1">Nama Fakultas</label>
                <input type="text" class="form-control" name="nama_fakultas" placeholder="Nama Fakultas" value="{{old('nama_fakultas')}}">
                @error('nama_fakultas')
                <span class="text-danger">{{message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Dekan</label>
                <input type="text" class="form-control" name="nama_dekan" placeholder="Dekan" value="{{old('nama_dekan')}}">
                @error('nama_fakultas')
                <span class="text-danger">{{message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Wakil Dekan</label>
                <input type="text" class="form-control" name="nama_wakil_dekan" placeholder="Wakil Dekan" value="{{old('nama_wakil_dekan')}}">
                @error('nama_fakultas')
                <span class="text-danger">{{message}}</span>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="{{route('fakultas.index')}}" class="btn btn-light">Batal</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection