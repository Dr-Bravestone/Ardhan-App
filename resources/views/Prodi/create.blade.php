@extends('layout.main')
@section('judul_halaman', 'Halaman tambah Prodi')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">TABLE PRODI BARU</h4>
          <div class="card-body">
            <h4 class="card-title">Form</h4>
            <p class="card-description">
              Silahkan Isi Form
            </p>
            <form action="{{route('prodi.store')}}" method="POST" class="forms-sample">
                @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Prodi</label>
                <input type="text" class="form-control" name="nama_prodi" placeholder="Prodi" value="{{old('nama_prodi')}}">
                @error('nama_prodi')
                <span class="text-danger">{{message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Nama Fakultas</label>
                <select name="fakultas_id" class="form-control">
                  @foreach($fakultas as $item)
                    <option value="{{$item->id}}">
                    {{$item->nama_fakultas}}</option>
                  @endforeach
                </select>
                @error('fakultas_id')
                <span class="text-danger">{{message}}</span>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="{{route('prodi.index')}}" class="btn btn-light">Batal</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection