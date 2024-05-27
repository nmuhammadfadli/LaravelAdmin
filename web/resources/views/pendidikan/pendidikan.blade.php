@extends('layout.master')

@section('konten')
<div class="row">
    <div class="col-sm-4"><a href="/addpendidikan" class="btn btn-primary mb-3">Tambah Data</a></div>
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="input-group mb-3">
            <form action="/pendidikan" method="GET" style="display: flex">
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
        <th scope="col">Id</th>
        <th scope="col">Nama</th>
        <th scope="col">Tingkatan</th>
        <th scope="col">Tahun Masuk</th>
        <th scope="col">Tahun Keluar</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pendidikan as $item)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->id}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->tingkatan}}</td>
            <td>{{$item->tahun_masuk}}</td>
            <td>{{$item->tahun_keluar}}</td>
            <td>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus{{$item->id}}">
                   Hapus
                </button>
                <a href="/pendidikan/{{$item->id}}" class="btn btn-warning">Edit</a>
            </td>
        </tr>
      @endforeach   
    </tbody>
  </table>
@foreach ($pendidikan as $item)
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
