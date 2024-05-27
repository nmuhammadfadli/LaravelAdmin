@extends('layout.master')

@section('konten')
<h4 class="text-title text-primary">Tambah Pegawai</h3>
    <hr>
<form action="/savepetugas" method="POST">
@csrf
    <div class="row">
        <div class="col-sm-6 bg-primary">
            <div class="form-group">
                <label for="exampleInputtext1">Nama</label>
                <input type="text" class="form-control"  name="nama">
              </div>
        </div>
        <div class="col-sm-6 bg-primary">
            <div class="form-group">
                <label for="exampleInputtext1">Username</label>
                <input type="text" class="form-control"  name="username">
              </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 bg-primary">
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control"  name="password">
              </div>
        </div>
        <div class="col-sm-6 bg-primary">
            <div class="form-group">
                <label for="exampleInputPassword1">Status</label>
                <div class="input-group mb-3">
                    <select class="custom-select" id="inputGroupSelect01" name="status">
                      <option selected>Pilih</option>
                      <option value="1">Aktif</option>
                      <option value="2">Tidak Aktif</option>
                    </select>
                  </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
