@extends('layout.master')

@section('konten')

<div class="row">
    <div class="col-sm-4"><a href="/tambahpegawai" class="btn btn-info mb-3">Tambah Data</a></div>
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="input-group mb-3">
            <form action="/warga" method="GET" style="display: flex">
                <input type="text" class="form-control" placeholder="Cari Sesuai Nama" name="cari">
                <button class="btn btn-info" type="submit" id="button-addon2">Cari</button>
            </form>
          </div>
    </div>
</div>
<table class="table">
    <thead class="bg-info">
      <tr>
        <th scope="col">NIK</th>
        <th scope="col">Nama</th>
        <th scope="col">Tempat Tanggal Lahir</th>
        <th scope="col">Alamat</th>
        <th scope="col">No Hp</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($warga as $item)
        <tr>
            <th scope="row">{{$item->nik}}</th>
            <td>{{$item->nama_warga}}</td>
            <td>{{$item->tempat_lahir}} - {{$item->tanggal_lahir}}</td>
            <td>{{$item->alamat_rumah}}</td>
            <td>{{$item->no_hp}}</td>
            <td>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus{{$item->nik}}">
                   Hapus
                </button>
                <a href="/warga/{{$item->nik}}" class="btn btn-warning">Edit</a>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>

@foreach ($warga as $item)
  <!-- Modal -->
  <div class="modal fade" id="hapus{{$item->nik}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          Apakah Kamu mau Hapus {{$item->nama_warga}} ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <a href="/deletewarga/{{$item->nik}}" type="button" class="btn btn-primary">Hapus</a>
        </div>
      </div>
    </div>
  </div>
@endforeach
@endsection
