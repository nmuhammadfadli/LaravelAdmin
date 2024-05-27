@extends('layout.master')

@section('konten')
<h4 class="text-title text-primary">Edit Tagihan</h4>
<hr>
<form action="/edittagihan/{{$detail->id}}" method="POST">
@csrf

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputtext1">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{ $detail->nama }}" >
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">No Telp</label>
                    <input type="number" class="form-control" name="notelp" value="{{ $detail->notelp }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Bulan</label>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="inputGroupSelect01" name="bulan">
                            <!-- Option untuk bulan, pastikan bulan terpilih sesuai dengan data yang akan diedit -->
                            <option value="1" {{ $detail->bulan == 1 ? 'selected' : '' }}>Januari</option>
                            <option value="2" {{ $detail->bulan == 2 ? 'selected' : '' }}>Februari</option>
                            <option value="3" {{ $detail->bulan == 3 ? 'selected' : '' }}>Maret</option>
                            <option value="4" {{ $detail->bulan == 4 ? 'selected' : '' }}>April</option>
                            <option value="5" {{ $detail->bulan == 5 ? 'selected' : '' }}>Mei</option>
                            <option value="6" {{ $detail->bulan == 6 ? 'selected' : '' }}>Juni</option>
                            <option value="7" {{ $detail->bulan == 7 ? 'selected' : '' }}>Juli</option>
                            <option value="8" {{ $detail->bulan == 8 ? 'selected' : '' }}>Agustus</option>
                            <option value="9" {{ $detail->bulan == 9 ? 'selected' : '' }}>September</option>
                            <option value="10" {{ $detail->bulan == 10 ? 'selected' : '' }}>Oktober</option>
                            <option value="11" {{ $detail->bulan == 11 ? 'selected' : '' }}>November</option>
                            <option value="12" {{ $detail->bulan == 12 ? 'selected' : '' }}>Desember</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputtext1">Tanggal</label>
                    <!-- Ganti input type menjadi date untuk memudahkan input tanggal -->
                    <input type="date" class="form-control" name="tanggal" value="{{ $detail->tanggal }}">
                    <small class="form-text text-muted">Format tanggal: YYYY-MM-DD</small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputtext1">Jumlah</label>
                    <input type="number" class="form-control" name="jumlah" value="{{ $detail->jumlah }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputtext1">Bayar</label>
                    <input type="number" class="form-control" name="bayar" value="{{ $detail->bayar }}">
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
