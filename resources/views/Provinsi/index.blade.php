@extends('layout.master')
@section('judul_halaman', 'Halaman Fakultas')

@section('content')
    <table class="table table-striped">
    <thead>
        <tr align="center">
            <td>ID</td>
            <td>Nama Provinsi</td>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($provinsi as $item)
        <tr>
            <td>{{ $item['id'] }}</td>
            <td>{{ $item['nama_provinsi'] }}</td>
            
        </tr>
        @endforeach
    </tbody>
</table>
@endsection