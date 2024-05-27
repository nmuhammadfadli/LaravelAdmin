@extends('layout.master')

@section('konten')
<h4 class="text-title text-primary">Tambah Data Produk</h4>
<hr>
<form action="/saveproduk" method="POST">
    @csrf
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputtext1">Nama</label>
                <input type="text" class="form-control" name="nama">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputPassword1">Harga</label>
                <input type="number" class="form-control" name="harga">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputPassword1">Bulan</label>
                <div class="input-group mb-3">
                    <select class="custom-select" id="inputGroupSelect01" name="bulan">
                        <option selected>Pilih</option>
                        <option value="1">Januari</option>
                        <option value="2">Feb</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">Sept</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Des</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="YYYY-MM-DD" >
            <small class="form-text text-muted">Format tanggal: YYYY-MM-DD</small>
        </div>
    </div>
</div>


    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputtext1">Jumlah</label>
                <input type="number" class="form-control" name="jumlah" >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputtext1">Keuntungan</label>
                <input type="number" class="form-control" name="keuntungan" >
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
