@extends('layout.master')

@section('konten')
<h4 class="text-title text-primary">Edit Pendidikan</h4>
<hr>
<form action="/editpendidikan/{{$detail->id}}" method="POST">
@csrf
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputtext1">ID</label>
            <input type="text" class="form-control" name="id" value="{{ $detail->id }}">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputtext1">Tahun Masuk</label>
            <input type="number" class="form-control" name="tahun_masuk" min="1900" max="2099" value="{{ $detail->tahun_masuk }}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputtext1">Tahun Keluar</label>
            <input type="number" class="form-control" name="tahun_keluar" min="1900" max="2099" value="{{ $detail->tahun_keluar }}">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputPassword1">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ $detail->nama }}">
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
                    <option value="1" {{ $detail->tingkatan == 1 ? 'selected' : '' }}>TK</option>
                    <option value="2" {{ $detail->tingkatan == 2 ? 'selected' : '' }}>SD</option>
                    <option value="3" {{ $detail->tingkatan == 3 ? 'selected' : '' }}>SMP</option>
                    <option value="4" {{ $detail->tingkatan == 4 ? 'selected' : '' }}>SMA/SMK</option>
                    <option value="5" {{ $detail->tingkatan == 5 ? 'selected' : '' }}>D3</option>
                    <option value="6" {{ $detail->tingkatan == 6 ? 'selected' : '' }}>D4/S1</option>
                    <option value="7" {{ $detail->tingkatan == 7 ? 'selected' : '' }}>S2</option>
                    <option value="8" {{ $detail->tingkatan == 8 ? 'selected' : '' }}>S3</option>
                </select>
            </div>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
