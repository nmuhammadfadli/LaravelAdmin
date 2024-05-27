<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">

    <title>Data Pegawai</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-purple fixed-top shadow">
            <!-- <img src="{{asset('frontend')}}/img/logo 2.png" width="40" height="40" class="d-inline-block align-top" alt=""> -->
            <h3 class="ml-3 text-white">PENDATAAN PEGAWAI</h3>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <button type="button" class="btn btn-primary nav-link" data-toggle="modal" data-target="#exampleModal">
                {{session('nama')}}
              </button>
            </li>
          </ul>
        </div>
    </nav>

    <div class="content mt-5">
        <div class="row">
            <div class="col-sm-2 ">
                <div class="card mt-5" >
                    <ul class="list-group list-group-flush">
                      <a href="/home"><li class="list-group-item">Home</li></a><br>
                      <!-- <a href="/pegawai"><li class="list-group-item">Pegawai</li></a>
                      <a href="/datapegawai"><li class="list-group-item">Pengalaman Kerja</li></a>
                      <a href="/vaksin"><li class="list-group-item">Riwayat Hidup</li></a>
                      <a href="/pendidikan"><li class="list-group-item">Pendidikan</li></a> -->
                      <a href="/tagihan"><li class="list-group-item">Tagihan</li></a>
                      <a href="/buku"><li class="list-group-item">Buku</li></a>
                      <a href="/produk"><li class="list-group-item">Produk</li></a>
                      <a href="/item"><li class="list-group-item">Item</li></a>
                    </ul>
                  </div>
            </div>
            <div class="col-sm-10 mt-5 bg-white">
                <div class="container">
                    <div class="card shadow">
                        <div class="card-body">
                            @yield('konten')
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          Apakah {{session('nama')}} Ingin logout
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <a href="/logout" type="button" class="btn btn-primary">Logout</a>
        </div>
      </div>
    </div>
  </div>

    <script src="{{asset('frontend')}}/jquery.js"></script>
    <script src="{{asset('frontend')}}/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
