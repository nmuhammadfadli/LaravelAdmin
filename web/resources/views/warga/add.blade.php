@extends('layout.master')

@section('konten')
<h4 class="text-title text-primary">Tambah Warga</h3>
    <hr>
<form action="/savewarga" method="POST">
@csrf
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputtext1">NIK</label>
                <input type="text" class="form-control"  name="nik">
              </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputtext1">Nama</label>
                <input type="text" class="form-control"  name="nama">
              </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputtext1">Tempat lahir</label>
                <input type="text" class="form-control"  name="tempat">
              </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputtext1">Tanggal lahir</label>
                <input type="date" class="form-control"  name="lahir">
              </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputtext1">Alamat</label>
                <input type="text" class="form-control"  name="alamat">
              </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputtext1">Nomor Hp</label>
                <input type="number" class="form-control"  name="no_hp">
              </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
