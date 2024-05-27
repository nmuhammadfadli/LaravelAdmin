@extends('layout.master')

@section('konten')
<div class="row">
    <div class="col-sm-4"><a href="/addvaksin" class="btn btn-primary mb-3">Tambah Data</a></div>
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="input-group mb-3">
            <form action="/vaksin" method="GET" style="display: flex">
                <input type="text" class="form-control" placeholder="Cari Sesuai Nama" name="cari">
                <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
            </form>
          </div>
    </div>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">NIK</th>
        <th scope="col">Nama Warga</th>
        <th scope="col">Tanggal Vaksin</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">periode</th>
        <th scope="col">petugas</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($vaksin as $item)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->nik}}</td>
            <td>{{$item->nama_warga}}</td>
            <td>{{$item->tanggal_vaksin}}</td>
            <td>{{$item->deskripsi}}</td>
            <td>{{$item->periode}}</td>
            <td>{{$item->nama_petugas}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
