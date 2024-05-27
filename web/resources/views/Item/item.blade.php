@extends('layout.master')

@section('konten')
<!-- <div class="row">
    <div class="col-sm-4"><a href="/additem" class="btn btn-primary mb-3">Tambah Data</a></div>
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="input-group mb-3">
            <form action="/item" method="GET" style="display: flex">
                <input type="text" class="form-control" placeholder="Cari Sesuai Nama" name="cari">
                <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
            </form>
          </div>
    </div>
</div>
<table class="table">
    <thead>
      <tr>
      <td>{{$item->nama}}</td>
            <td>{{$item->harga}}</td>
            <td>{{$item->bulan}}</td>
            <td>{{$item->tanggal}}</td>
            <td>{{$item->jumlah}}</td>
            <td>{{$item->keuntungan}}</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($item as $item)
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->nama}}</td>
            <td>{{$item->harga}}</td>
            <td>{{$item->bulan}}</td>
            <td>{{$item->tanggal}}</td>
            <td>{{$item->jumlah}}</td>
            <td>{{$item->keuntungan}}</td>
            <td>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus{{$item->id}}">
                   Hapus
                </button>
                <a href="/item/{{$item->id}}" class="btn btn-warning">Edit</a>
            </td>
        </tr>
      @endforeach   
    </tbody>
  </table>
@foreach ($item as $item)
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
  </div> -->
@endforeach
@endsection
