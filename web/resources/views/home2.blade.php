<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">

    <title>HOME : VAKSINASI</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-purple fixed-top shadow">
        <div class="container">
            <img src="{{asset('frontend')}}/img/logo 2.png" width="40" height="40" class="d-inline-block align-top" alt="">
            <b class="ml-3 text-white">VaksinTech</b>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#vaksin">Informasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#vaksin">Data Vaksin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#berita">Berita Terkini</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
        </div>
    </nav>

    <div class="home">
        <div class="jumbotron d-flex align-items-center">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-8">
                        <div id="carouselExampleIndicators" class="carousel slide shadow" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="{{asset('frontend')}}/img/banner/alur-periksa-covid-19.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="{{asset('frontend')}}/img/banner/ESjooepUMAMuVj5.jfif" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="{{asset('frontend')}}/img/banner/verifikasi-vaksin-2.png" class="d-block w-100" alt="...">
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-4 text">
                        <h3 class="title-text">AYO VAKSIN DAN </h3>
                        <h3 class="title-text">REGISTRASI DI VAKSINTECH</h3>
                        <p class="parag">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores natus quasi quod? Accusantium omnis corporis totam amet nisi adipisci in voluptates, quis ipsum eius, at illo? Explicabo quos ea molestiae?
                        </p>
                        <button class="btn btn-primary">More Info</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php $jmlh_vaksin = 0 ?>
    @foreach ($vaksin as $item)
        <?php $jmlh_vaksin = $jmlh_vaksin + 1 ?>
    @endforeach


    <?php $j_warga = 0 ?>
    @foreach ($warga as $item)
        <?php $j_warga = $j_warga + 1 ?>
    @endforeach

    <div class="about" id="vaksin">
        <div class="jumbotron d-flex align-items-center">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-4 mt-2">
                        <div class="card">
                            <div class="card-body red">
                              <h5 class="card-title">Data Vaksin</h5>
                              <p class="card-text">Ada Sekitar {{$jmlh_vaksin}} warga yang sudah vaksin</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-4 mt-2">
                        <div class="card">
                            <div class="card-body yellow">
                              <h5 class="card-title">Data Warga</h5>
                              <p class="card-text">Ada Sekitar {{$j_warga}} warga sudah mendaftar</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-4 mt-2">
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Stok vaksin</h5>
                              <p class="card-text">Ada Sekitar 2000 Stok Vaksin</p>
                            </div>
                          </div>
                    </div>
                </div>
                <table class="table table-striped mt-3 shadow">
                    <thead>
                      <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Vaksin</th>
                        <th scope="col">Deskripsi</th>
                      </tr>
                    </thead>
                    @foreach ($vaksin as $item)
                    <tbody>
                        <tr>
                          <td>{{$item->nama_warga}}</td>
                          <td>{{$item->tanggal_vaksin}} Vaksin ke {{$item->periode}}</td>
                          <td>{{$item->deskripsi}}</td>
                        </tr>
                      </tbody>
                    @endforeach
                  </table>
            </div>
        </div>
    </div>

    <div class="berita" id="berita">
        <div class="jumbotron d-flex align-items-center">
            <div class="container">
                <h3 class="title-text">BERITA TERKINI</h2>
                <p>Berita terkini tentang covid 19 yang ada di indonesia</p>
                <br>
                <div class="row">
                    <div class="col-sm-3 mt-3">
                        <div class="card" >
                            <img src="{{asset('frontend')}}/img/berita/covid-19-and-tobacco-1---bi.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h3 class="title-text-2">ASAP ROKOK BERESIKO...</h5>
                                <hr>
                              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, nisi ut sed dolorem reprehenderit atque.....</p>
                              <a href="#" class="btn btn-primary mt-2">Selengkapnya</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-3 mt-3">
                        <div class="card" >
                            <img src="{{asset('frontend')}}/img/berita/elderly-4---bi.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h3 class="title-text-2">MENOLONG LANSIA</h5>
                                <hr>
                              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, nisi ut sed dolorem reprehenderit atque.....</p>
                              <a href="#" class="btn btn-primary mt-2">Selengkapnya</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-3 mt-3">
                        <div class="card" >
                            <img src="{{asset('frontend')}}/img/berita/information-note-on-covid-19-and-tobacco-1---bi.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h3 class="title-text-2">COVID DAN TEMBAKAU</h5>
                                <hr>
                              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, nisi ut sed dolorem reprehenderit atque.....</p>
                              <a href="#" class="btn btn-primary mt-2">Selengkapnya</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-3 mt-3">
                        <div class="card" >
                            <img src="{{asset('frontend')}}/img/berita/new-normal-1---bie4b73458c9a84d4995ebef27544a3a0a.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h3 class="title-text-2">NEW NORMAL</h5>
                                <hr>
                              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, nisi ut sed dolorem reprehenderit atque.....</p>
                              <a href="#" class="btn btn-primary mt-2">Selengkapnya</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact" id="contact">
        <div class="jumbotron d-flex align-items-center">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-6">
                        <img src="{{asset('frontend')}}/img/ready-for-the-covid-vaccine-covid-vaccine.gif" class="img-fluid">
                    </div>
                    <div class="col-sm-6">

                        <h3 class="title-text">CONTACT KAMI</h2>
                            <p>Jika Ada Pertanyaan Silahkan Tanyakan Di Bawah </p>
                        <form>
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                      </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                      </div>
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Kepentingan</label>
                              <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Pesan</label>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>
                            <button class="btn btn-primary">Kirim Pesan</button>
                          </form>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="jumbotron d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="{{asset('frontend')}}/img/logo 2.png" alt="">
                        <h3 class="title-text">VAKSIN</h3>
                    </div>
                    <div class="col-sm-3">
                        <h3>Services Center</h3>
                        <ul>
                            <li>Contact Me</li>
                            <li>VaksinTech.com</li>
                            <li>Berita</li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h3>Contact</h3>
                        <ul>
                            <li>+621231848241</li>
                            <li>VaksinTech.com</li>
                            <li>VaksinIndo@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h3>Helper Page</h3>
                        <ul>
                            <li>Home</li>
                            <li>Informasi</li>
                            <li>Data Vaksin</li>
                            <li>Berita</li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copy text-center">
        <b>@Fadli - CODINGSKUY</b>
    </div>

    <script src="{{asset('frontend')}}/jquery.js"></script>
    <script src="{{asset('frontend')}}/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
