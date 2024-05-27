@extends('layout.master')

@section('konten')
    <h4 class="text-title text-primary">Edit Data Buku</h4>
    <hr>
    <form action="/editbuku/{{$detail->id}}" method="POST">
        @csrf

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputtext1">Judul</label>
                    <input type="text" class="form-control" name="judul" value="{{ $detail->judul }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Tahun Terbit</label>
                    <input type="number" class="form-control" name="tahun_terbit" value="{{ $detail->tahun_terbit }}">
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
                            <option value="1" {{ $detail->bidang == 1 ? 'selected' : '' }}>Sosial</option>
                            <option value="2" {{ $detail->bidang == 2 ? 'selected' : '' }}>Ekonomi</option>
                            <option value="3" {{ $detail->bidang == 3 ? 'selected' : '' }}>Sains</option>
                            <option value="4" {{ $detail->bidang == 4 ? 'selected' : '' }}>Sejarah</option>
                            <option value="5" {{ $detail->bidang == 5 ? 'selected' : '' }}>Matematika</option>
                            <option value="6" {{ $detail->bidang == 6 ? 'selected' : '' }}>Teknologi</option>
                            <option value="7" {{ $detail->bidang == 7 ? 'selected' : '' }}>Filsafat</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="tanggal_pinjam">Tanggal Pinjam</label>
                    <input type="date" class="form-control" name="tanggal_pinjam" id="tanggal_pinjam" placeholder="YYYY-MM-DD" value="{{ $detail->tanggal_pinjam }}">
                    <small class="form-text text-muted">Format tanggal: YYYY-MM-DD</small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputtext1">Nama Peminjam</label>
                    <input type="text" class="form-control" name="nama_peminjam" value="{{ $detail->nama_peminjam }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="tanggal_kembali">Tanggal Kembali</label>
                    <input type="date" class="form-control" name="tanggal_kembali" id="tanggal_kembali" placeholder="YYYY-MM-DD" value="{{ $detail->tanggal_kembali }}">
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
