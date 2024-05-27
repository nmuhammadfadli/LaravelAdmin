@extends('layout.master')

@section('konten')
<h4 class="text-title text-primary">Tambah Vaksinasi</h3>
    <hr>
<form action="/savevaksin" method="POST">
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
                <label for="exampleInputtext1">Tanggal vaksin</label>
                <input type="date" class="form-control"  name="tanggal">
              </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputPassword1">deskripsi</label>
                <input type="text" class="form-control"  name="deskripsi">
              </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputPassword1">Periode</label>
                <div class="input-group mb-3">
                    <select class="custom-select" id="inputGroupSelect01" name="periode">
                      <option selected>Pilih</option>
                      <option value="1">Vaksin 1</option>
                      <option value="2">Vaksin 2</option>
                      <option value="2">Vaksin 3</option>
                    </select>
                  </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
