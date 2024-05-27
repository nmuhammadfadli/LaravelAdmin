@extends('layout.master')

@section('konten')
<h4 class="text-title text-primary">Tambah Pendidikan</h4>
<hr>
<form action="/savependidikan" method="POST">
    @csrf
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputtext1">ID</label>
                <input type="text" class="form-control" name="id">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputPassword1">Nama</label>
                <input type="text" class="form-control" name="nama">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputtext1">Tahun Masuk</label>
                <input type="number" class="form-control" name="tahun_masuk" min="1900" max="2099">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputtext1">Tahun Keluar</label>
                <input type="number" class="form-control" name="tahun_keluar" min="1900" max="2099">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputPassword1">Tingkatan</label>
                <div class="input-group mb-3">
                    <select class="custom-select" id="inputGroupSelect01" name="tingkatan">
                        <option selected>Pilih</option>
                        <option value="1">TK</option>
                        <option value="2">SD</option>
                        <option value="3">SMP</option>
                        <option value="4">SMA/SMK</option>
                        <option value="5">D3</option>
                        <option value="6">D4/S1</option>
                        <option value="7">S2</option>
                        <option value="8">S3</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
