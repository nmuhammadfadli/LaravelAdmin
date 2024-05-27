@extends('layout.master')

@section('konten')
<div class="row">
    <div class="col-sm-4"><a href="/addtagihan" class="btn btn-primary mb-3">Tambah Data</a></div>
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="input-group mb-3">
        <form action="/tagihan" method="GET" style="display: flex">
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
        <th scope="col">Nama</th>
        <th scope="col">No Telp</th>
        <th scope="col">bulan</th>
        <th scope="col">tanggal</th>
        <th scope="col">jumlah</th>
        <th scope="col">bayar</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tagihan as $item)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->nama}}</td>
            <td>{{$item->notelp}}</td>
            <td>{{$item->bulan}}</td>
            <td>{{$item->tanggal}}</td>
            <td>{{$item->jumlah}}</td>
            <td>{{$item->bayar}}</td>
            <td>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus{{$item->id}}">
                   Hapus
                </button>
                <a href="/tagihan/{{$item->id}}" class="btn btn-warning">Edit</a>
            </td>
        </tr>
      @endforeach   
    </tbody>
  </table>
  @foreach ($tagihan as $item)
  <!-- Modal -->
  <div class="modal fade" id="hapus{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          Apakah Kamu mau Hapus {{$item->nama}} ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <a href="/delete/{{$item->id}}" type="button" class="btn btn-primary">Hapus</a>
        </div>
      </div>
    </div>
  </div>
@endforeach
@endsection
