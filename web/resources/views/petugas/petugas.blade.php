@extends('layout.master')

@section('konten')
<a href="/tambahpegawai" class="btn btn-primary mb-3">Tambah Data</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Username</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($petugas as $item)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->nama_petugas}}</td>
            <td>{{$item->username}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
