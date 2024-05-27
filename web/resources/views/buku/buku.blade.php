@extends('layout.master')

@section('konten')
<div class="row">
    <div class="col-sm-4"><a href="/addbuku" class="btn btn-primary mb-3">Tambah Data</a></div>
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="input-group mb-3">
            <form action="/buku" method="GET" style="display: flex">
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
        <th scope="col">Judul</th>
        <th scope="col">Tahun Terbit</th>
        <th scope="col">Bidang</th>
        <th scope="col">Tanggal Pinjam</th>
        <th scope="col">Nama Peminjam</th>
        <th scope="col">Tanggal Kembali</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($buku as $item)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->judul}}</td>
            <td>{{$item->tahun_terbit}}</td>
            <td>{{$item->bidang}}</td>
            <td>{{$item->tanggal_pinjam}}</td>
            <td>{{$item->nama_peminjam}}</td>
            <td>{{$item->tanggal_kembali}}</td>
            <td>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus{{$item->id}}">
                   Hapus
                </button>
                <a href="/buku/{{$item->id}}" class="btn btn-warning">Edit</a>
            </td>
        </tr>
      @endforeach   
    </tbody>
  </table>
@foreach ($buku as $item)
  <!-- Modal -->
  <div class="modal fade" id="hapus{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          Apakah Kamu mau Hapus {{$item->judul}} ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <a href="/deletebuku/{{$item->id}}" type="button" class="btn btn-primary">Hapus</a>
        </div>
      </div>
    </div>
  </div>
@endforeach
@endsection
