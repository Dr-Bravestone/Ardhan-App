@extends('layout.main')
@section('judul_halaman', 'Halaman Fakultas')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Financial management review</h4>
          <div class=text-right>
          <a href="{{route('fakultas.create')}}" type="button" class="btn btn-primary btn-fw">TAMBAH</a>
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
            <thead>
                <tr align="center">
                    <td>Nama Fakultas</td>
                    <td>Dekan</td>
                    <td>Wakil Dekan</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($fakultas as $item)
                <tr>
                    <td>{{ $item['nama_fakultas'] }}</td>
                    <td>{{ $item['nama_dekan'] }}</td>
                    <td>{{ $item['nama_wakil_dekan'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
          </div>
        </div>
      </div>
    </div>
  </div>
    <h2>Fakultas</h2>
    ini adalah halaman Fakultas
    <ul>
        @foreach ($fakultas as $item)
            <li>{{ $item['nama_fakultas'] }}</li>
        @endforeach
    </ul>
    <table border="1">
    </table>
@endsection