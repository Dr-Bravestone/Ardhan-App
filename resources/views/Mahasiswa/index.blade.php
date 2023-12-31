@extends('layout.main')
@section('judul_halaman', 'Halaman Mahasiswa')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Financial management review</h4>
          <div class=text-right>
          <a href="{{route('Mahasiswa.create')}}" type="button" class="btn btn-primary btn-fw">TAMBAH</a>
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
            <thead>
                <tr align="center">
                    <td>NPM</td>
                    <td>NAMA</td>
                    <td>FOTO</td>
                    <td>TANGGAL LAHIR</td>
                    <td>KOTA LAHIR</td>
                    <td>PROGRAM STUDI</td>
                    <td>CREATED AT</td>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection