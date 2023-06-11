@extends('layout.main')
@section('judul_halaman', 'Halaman tambah Mahasiswa')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">TABLE MAHASISWA BARU</h4>
          <div class="card-body">
            <h4 class="card-title">Form</h4>
            <p class="card-description">
              Silahkan Isi Form
            </p>
            <form action="{{route('mahasiswa.store')}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="exampleInputUsername1">NPM</label>
                <input type="text" class="form-control" name="npm" placeholder="NPM" value="{{old('npm')}}">
                @error('npm')
                <span class="text-danger">{{message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">NAMA</label>
                <input type="text" class="form-control" name="nama" placeholder="nama" value="{{old('nama')}}">
                @error('nama')
                <span class="text-danger">{{message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="imageInput">GAMBAR</label>
                <input type="file" class="form-control" name="foto" accept="image/*">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">TANGGAL LAHIR</label>
                <input type="date" class="form-control" name="tanggal" value="{{old('foto')}}">
                @error('tanggal')
                <span class="text-danger">{{message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">KOTA LAHIR</label>
                <input type="text" class="form-control" name="kota_lahir" placeholder="Kota Lahir" value="{{old('kota_lahir')}}">
                @error('kota_lahir')
                <span class="text-danger">{{message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">NAMA PRODI</label>
                <select name="prodi_id" class="form-control">
                  @foreach($Prodi as $item)
                    <option value="{{$item->id}}">
                    {{$item->nama_prodi}}</option>
                  @endforeach
                </select>
                @error('prodi_id')
                <span class="text-danger">{{message}}</span>
                @enderror
              </div>

              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="{{route('Mahasiswa.index')}}" class="btn btn-light">Batal</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection