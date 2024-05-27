@extends('layout.master')

@section('konten')
<h4 class="text-title text-primary">Edit Produk</h4>
<hr>
<form action="/edititem/{{$detail->id}}" method="POST">
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
                    <label for="exampleInputPassword1">Harga</label>
                    <input type="number" class="form-control" name="harga" value="{{ $detail->harga }}">
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
                            <!-- Sisipkan opsi untuk bulan lainnya sesuai dengan format yang sama -->
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
                    <label for="exampleInputtext1">Keuntungan</label>
                    <input type="number" class="form-control" name="keuntungan" value="{{ $detail->keuntungan }}">
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
