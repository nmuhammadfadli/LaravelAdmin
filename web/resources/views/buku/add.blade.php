@extends('layout.master')

@section('konten')
<h4 class="text-title text-primary">Tambah Data Buku</h4>
<hr>
<form action="/savebuku" method="POST">
    @csrf
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputtext1">Judul</label>
                <input type="text" class="form-control" name="judul">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputPassword1">Tahun Terbit</label>
                <input type="number" class="form-control" name="tahun_terbit">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputPassword1">Bidang</label>
                <div class="input-group mb-3">
                    <select class="custom-select" id="inputGroupSelect01" name="bidang">
                        <option selected>Pilih</option>
                        <option value="Sosial">Sosial</option>
                        <option value="Ekonomi">Ekonomi</option>
                        <option value="Sains">Sains</option>
                        <option value="Sejarah">Sejarah</option>
                        <option value="Matematika">Matematika</option>
                        <option value="Teknologi">Teknologi</option>
                        <option value="Filsafat">Filsafat</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="tanggal">Tanggal Pinjam</label>
            <input type="date" class="form-control" name="tanggal_pinjam" id="tanggal_pinjam" placeholder="YYYY-MM-DD" >
            <small class="form-text text-muted">Format tanggal: YYYY-MM-DD</small>
        </div>
    </div>
</div>


    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputtext1">Nama Peminjam</label>
                <input type="text" class="form-control" name="nama_peminjam" >
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="tanggal">Tanggal Kembali</label>
            <input type="date" class="form-control" name="tanggal_kembali" id="tanggal_kembali" placeholder="YYYY-MM-DD" >
            <small class="form-text text-muted">Format tanggal: YYYY-MM-DD</small>
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
